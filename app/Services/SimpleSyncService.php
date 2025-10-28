<?php
// app/Services/SimpleSyncService.php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class SimpleSyncService
{
    private $chunkSize = 200; // Larger chunks for better performance
    private $maxRetries = 3;
    private $retryDelay = 2;

    // Define allowed columns for each table
    private $allowedColumns = [
        'customers' => [
            'id', 'name', 'incharge', 'address', 'order_no', 'phone',
            'email', 'country', 'image', 'entry_by', 'created_at', 'updated_at'
        ],
        'branches' => [
            'id', 'name', 'address', 'phone', 'email', 'region_id',
            'entry_by', 'created_at', 'updated_at', 'managed_by'
        ],
        'tb_users' => [
            'id', 'group_id', 'username', 'password', 'email', 'first_name',
            'last_name', 'avatar', 'active', 'login_attempt', 'last_login',
            'created_at', 'updated_at', 'reminder', 'activation', 'remember_token',
            'last_activity', 'config', 'company_name', 'address', 'city', 'phone',
            'license_no', 'license_exp_date', 'user_type', 'entry_by',
            'customer_id', 'driver_id'
        ],
        'pickups' => [
            'id', 'initiator_id', 'pickup_code', 'waybill', 'item_description',
            'driver_id', 'collection_date', 'quantity', 'weight', 'status_id',
            'pickup_point', 'fleet_type', 'dropping_point', 'status_description',
            'entry_by', 'created_at', 'updated_at', 'notification'
        ],
        'shipments' => [
            'id', 'shipment_key', 'waybill', 'shipment_date', 'pickup_address',
            'pickup_time', 'source_branch_id', 'pickup_reference', 'customer_id',
            'scenarios', 'branch_id', 'agent_id', 'destination', 'item_description',
            'transporter_id', 'driver_id', 'quantity', 'dispatch_id', 'receiver_name',
            'receiver_phone', 'receiving_date', 'receiver_signature', 'delivered_by',
            'delivery_boy_signature', 'image_proof', 'remarks', 'weight', 'grn',
            'status_id', 'shipment_type', 'entry_by', 'created_at', 'updated_at',
            'loaded_by', 'receiving_time'
        ]
    ];

    public function syncAllData()
    {
        try {
            Log::info('Starting optimized data sync...');
            $startTime = now();

            // Sync in priority order (fastest first)
            $this->syncTableSmart('branches');
            $this->syncTableSmart('customers');
            $this->syncTableSmart('tb_users');
            $this->syncTableSmart('pickups');
            $this->syncTableSmart('shipments');

            $duration = $startTime->diffInSeconds(now());
            Log::info("Data sync completed in {$duration} seconds");
            return true;

        } catch (\Exception $e) {
            Log::error('Sync failed: ' . $e->getMessage());
            return false;
        }
    }

    private function syncTableSmart($tableName)
    {
        $syncCount = 0;
        $startTime = now();

        Log::info("Starting optimized sync for {$tableName}...");

        try {
            // Use batch processing with upserts for better performance
            $this->executeWithRetry(function() use ($tableName, &$syncCount) {
                $batch = [];
                $batchSize = 100; // Process 100 records at once

                DB::connection('external')
                    ->table($tableName)
                    ->orderBy('id')
                    ->chunk($this->chunkSize, function ($records) use ($tableName, &$syncCount, &$batch, $batchSize) {
                        foreach ($records as $record) {
                            $recordArray = $this->filterAllowedColumns((array) $record, $tableName);
                            $recordArray = $this->fixTimestampFields($recordArray, $record);

                            $batch[] = $recordArray;

                            // Process batch when it reaches the batch size
                            if (count($batch) >= $batchSize) {
                                $this->processBatch($tableName, $batch);
                                $syncCount += count($batch);
                                $batch = []; // Reset batch
                            }
                        }
                    });

                // Process any remaining records in the batch
                if (!empty($batch)) {
                    $this->processBatch($tableName, $batch);
                    $syncCount += count($batch);
                }
            });

            $duration = $startTime->diffInSeconds(now());
            Log::info("Synced {$syncCount} {$tableName} records in {$duration} seconds");

        } catch (\Exception $e) {
            Log::error("Failed to sync {$tableName}: " . $e->getMessage());
            throw $e;
        }
    }

    private function processBatch($tableName, $batch)
    {
        if (empty($batch)) return;

        try {
            // Use Laravel's upsert for better performance (Laravel 8+)
            if (method_exists(DB::table($tableName), 'upsert')) {
                DB::table($tableName)->upsert(
                    $batch,
                    ['id'], // Unique identifier
                    array_keys($this->allowedColumns[$tableName]) // Columns to update
                );
            } else {
                // Fallback to individual updateOrInsert
                foreach ($batch as $record) {
                    DB::table($tableName)->updateOrInsert(
                        ['id' => $record['id']],
                        $record
                    );
                }
            }
        } catch (\Exception $e) {
            Log::warning("Batch processing failed for {$tableName}, falling back to individual records: " . $e->getMessage());

            // Fallback: process records individually
            foreach ($batch as $record) {
                try {
                    DB::table($tableName)->updateOrInsert(
                        ['id' => $record['id']],
                        $record
                    );
                } catch (\Exception $individualError) {
                    Log::warning("Failed to sync {$tableName} record ID {$record['id']}: " . $individualError->getMessage());
                }
            }
        }
    }

    // Incremental sync method (only sync recent changes)
    public function syncRecentChanges($hoursBack = 2)
    {
        try {
            Log::info("Starting incremental sync for last {$hoursBack} hours...");
            $startTime = now();
            $cutoffTime = now()->subHours($hoursBack);

            $this->syncTableRecent('branches', $cutoffTime);
            $this->syncTableRecent('customers', $cutoffTime);
            $this->syncTableRecent('tb_users', $cutoffTime);
            $this->syncTableRecent('pickups', $cutoffTime);
            $this->syncTableRecent('shipments', $cutoffTime);

            $duration = $startTime->diffInSeconds(now());
            Log::info("Incremental sync completed in {$duration} seconds");
            return true;

        } catch (\Exception $e) {
            Log::error('Incremental sync failed: ' . $e->getMessage());
            return false;
        }
    }

    private function syncTableRecent($tableName, $cutoffTime)
    {
        $syncCount = 0;

        try {
            // Only sync records updated recently
            $recentRecords = DB::connection('external')
                ->table($tableName)
                ->where('updated_at', '>', $cutoffTime)
                ->orWhere('created_at', '>', $cutoffTime)
                ->count();

            if ($recentRecords === 0) {
                Log::info("No recent changes in {$tableName}");
                return;
            }

            Log::info("Found {$recentRecords} recent changes in {$tableName}");

            $batch = [];
            $batchSize = 50;

            DB::connection('external')
                ->table($tableName)
                ->where(function($query) use ($cutoffTime) {
                    $query->where('updated_at', '>', $cutoffTime)
                        ->orWhere('created_at', '>', $cutoffTime);
                })
                ->orderBy('id')
                ->chunk(100, function ($records) use ($tableName, &$syncCount, &$batch, $batchSize) {
                    foreach ($records as $record) {
                        $recordArray = $this->filterAllowedColumns((array) $record, $tableName);
                        $recordArray = $this->fixTimestampFields($recordArray, $record);

                        $batch[] = $recordArray;

                        if (count($batch) >= $batchSize) {
                            $this->processBatch($tableName, $batch);
                            $syncCount += count($batch);
                            $batch = [];
                        }
                    }
                });

            if (!empty($batch)) {
                $this->processBatch($tableName, $batch);
                $syncCount += count($batch);
            }

            Log::info("Synced {$syncCount} recent {$tableName} records");

        } catch (\Exception $e) {
            Log::error("Failed to sync recent {$tableName}: " . $e->getMessage());
        }
    }

    private function executeWithRetry($callback)
    {
        $attempt = 0;

        while ($attempt < $this->maxRetries) {
            try {
                return $callback();
            } catch (\Exception $e) {
                $attempt++;

                if ($attempt >= $this->maxRetries) {
                    throw $e;
                }

                Log::warning("Attempt {$attempt} failed, retrying in {$this->retryDelay} seconds: " . $e->getMessage());
                sleep($this->retryDelay);
                DB::connection('external')->reconnect();
            }
        }
    }

    private function fixTimestampFields($recordArray, $record)
    {
        $recordArray['created_at'] = $this->fixTimestamp($record->created_at ?? null);
        $recordArray['updated_at'] = now();

        if (isset($recordArray['last_login'])) {
            $recordArray['last_login'] = $this->fixTimestamp($recordArray['last_login']);
        }

        return $recordArray;
    }

    private function filterAllowedColumns($recordArray, $tableName): array
    {
        $allowedColumns = $this->allowedColumns[$tableName] ?? [];

        return array_filter($recordArray, function($key) use ($allowedColumns) {
            return in_array($key, $allowedColumns);
        }, ARRAY_FILTER_USE_KEY);
    }

    private function fixTimestamp($timestamp)
    {
        if (empty($timestamp) || $timestamp === '0000-00-00 00:00:00') {
            return now();
        }
        return $timestamp;
    }
}
