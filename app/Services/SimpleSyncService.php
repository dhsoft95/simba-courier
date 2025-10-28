<?php
// app/Services/SimpleSyncService.php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SimpleSyncService
{
    private $chunkSize = 50; // Smaller chunks
    private $maxRetries = 3;
    private $retryDelay = 2; // seconds

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
            Log::info('Starting data sync...');

            $this->syncTable('branches');
            $this->syncTable('customers');
            $this->syncTable('tb_users');
            $this->syncTable('pickups');
            $this->syncTable('shipments');

            Log::info('Data sync completed at ' . now());
            return true;

        } catch (\Exception $e) {
            Log::error('Sync failed: ' . $e->getMessage());
            return false;
        }
    }

    private function syncTable($tableName)
    {
        $syncCount = 0;
        $totalProcessed = 0;
        $errors = 0;

        Log::info("Starting sync for {$tableName}...");

        try {
            // Get total count first
            $totalRecords = $this->executeWithRetry(function() use ($tableName) {
                return DB::connection('external')->table($tableName)->count();
            });

            Log::info("Total {$tableName} records to sync: {$totalRecords}");

            // Process in smaller chunks with retry logic
            $this->executeWithRetry(function() use ($tableName, &$syncCount, &$totalProcessed, &$errors, $totalRecords) {
                DB::connection('external')
                    ->table($tableName)
                    ->orderBy('id')
                    ->chunk($this->chunkSize, function ($records) use ($tableName, &$syncCount, &$totalProcessed, &$errors, $totalRecords) {
                        foreach ($records as $record) {
                            try {
                                $recordArray = $this->filterAllowedColumns((array) $record, $tableName);

                                // Fix timestamp fields
                                $recordArray = $this->fixTimestampFields($recordArray, $record);

                                // Use local connection for insert
                                DB::table($tableName)->updateOrInsert(
                                    ['id' => $record->id],
                                    $recordArray
                                );

                                $syncCount++;
                                $totalProcessed++;

                                // Log progress every 100 records
                                if ($totalProcessed % 100 === 0) {
                                    $percentage = round(($totalProcessed / $totalRecords) * 100, 1);
                                    Log::info("Progress {$tableName}: {$totalProcessed}/{$totalRecords} ({$percentage}%)");
                                }

                            } catch (\Exception $e) {
                                $errors++;
                                Log::warning("Failed to sync {$tableName} record ID {$record->id}: " . $e->getMessage());

                                // Stop if too many errors
                                if ($errors > 10) {
                                    throw new \Exception("Too many errors in {$tableName} sync");
                                }
                            }
                        }

                        // Small delay between chunks to prevent overwhelming the connection
                        usleep(100000); // 0.1 second
                    });
            });

            Log::info("Synced {$syncCount} {$tableName} records (errors: {$errors})");

        } catch (\Exception $e) {
            Log::error("Failed to sync {$tableName}: " . $e->getMessage());
            throw $e;
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

                // Reconnect to external database
                DB::connection('external')->reconnect();
            }
        }
    }

    private function fixTimestampFields($recordArray, $record)
    {
        // Standard timestamp fixes
        $recordArray['created_at'] = $this->fixTimestamp($record->created_at ?? null);
        $recordArray['updated_at'] = now();

        // Table-specific fixes
        if (isset($recordArray['last_login'])) {
            $recordArray['last_login'] = $this->fixTimestamp($recordArray['last_login']);
        }

        return $recordArray;
    }

    private function filterAllowedColumns($recordArray, $tableName)
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
