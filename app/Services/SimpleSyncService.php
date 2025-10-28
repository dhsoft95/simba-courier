<?php
// app/Services/SimpleSyncService.php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class SimpleSyncService
{
    public function syncAllData()
    {
        try {
            $this->syncCustomers();
            $this->syncUsers();
            $this->syncPickups();
            $this->syncShipments();

            Log::info('Data sync completed at ' . now());
            return true;

        } catch (\Exception $e) {
            Log::error('Sync failed: ' . $e->getMessage());
            return false;
        }
    }

    private function syncCustomers()
    {
        $syncCount = 0;

        DB::connection('external')
            ->table('customers')
            ->orderBy('id')
            ->chunk(100, function ($records) use (&$syncCount) {
                foreach ($records as $record) {
                    $recordArray = (array) $record;

                    // Fix datetime issues
                    $recordArray = $this->fixDateTimeFields($recordArray);

                    DB::table('customers')->updateOrInsert(
                        ['id' => $record->id],
                        array_merge($recordArray, [
                            'updated_at' => now(),
                            'created_at' => $this->parseDateTime($record->created_at ?? null)
                        ])
                    );
                    $syncCount++;
                }
            });

        Log::info("Synced {$syncCount} customers");
    }

    private function syncUsers()
    {
        $syncCount = 0;

        DB::connection('external')
            ->table('tb_users')
            ->orderBy('id')
            ->chunk(100, function ($records) use (&$syncCount) {
                foreach ($records as $record) {
                    $recordArray = (array) $record;

                    // Fix datetime issues
                    $recordArray = $this->fixDateTimeFields($recordArray);

                    DB::table('tb_users')->updateOrInsert(
                        ['id' => $record->id],
                        array_merge($recordArray, [
                            'updated_at' => now(),
                            'created_at' => $this->parseDateTime($record->created_at ?? null)
                        ])
                    );
                    $syncCount++;
                }
            });

        Log::info("Synced {$syncCount} users");
    }

    private function syncPickups()
    {
        $syncCount = 0;

        DB::connection('external')
            ->table('pickups')
            ->orderBy('id')
            ->chunk(100, function ($records) use (&$syncCount) {
                foreach ($records as $record) {
                    $recordArray = (array) $record;

                    // Fix datetime issues
                    $recordArray = $this->fixDateTimeFields($recordArray);

                    // Fix date fields specific to pickups
                    if (isset($recordArray['collection_date'])) {
                        $recordArray['collection_date'] = $this->parseDate($recordArray['collection_date']);
                    }

                    DB::table('pickups')->updateOrInsert(
                        ['id' => $record->id],
                        array_merge($recordArray, [
                            'updated_at' => now(),
                            'created_at' => $this->parseDateTime($record->created_at ?? null)
                        ])
                    );
                    $syncCount++;
                }
            });

        Log::info("Synced {$syncCount} pickups");
    }

    private function syncShipments()
    {
        $syncCount = 0;

        DB::connection('external')
            ->table('shipments')
            ->orderBy('id')
            ->chunk(100, function ($records) use (&$syncCount) {
                foreach ($records as $record) {
                    $recordArray = (array) $record;

                    // Fix datetime issues
                    $recordArray = $this->fixDateTimeFields($recordArray);

                    // Fix date/datetime fields specific to shipments
                    if (isset($recordArray['shipment_date'])) {
                        $recordArray['shipment_date'] = $this->parseDate($recordArray['shipment_date']);
                    }
                    if (isset($recordArray['pickup_time'])) {
                        $recordArray['pickup_time'] = $this->parseDateTime($recordArray['pickup_time']);
                    }
                    if (isset($recordArray['receiving_date'])) {
                        $recordArray['receiving_date'] = $this->parseDate($recordArray['receiving_date']);
                    }
                    if (isset($recordArray['receiving_time'])) {
                        $recordArray['receiving_time'] = $this->parseDateTime($recordArray['receiving_time']);
                    }

                    DB::table('shipments')->updateOrInsert(
                        ['id' => $record->id],
                        array_merge($recordArray, [
                            'updated_at' => now(),
                            'created_at' => $this->parseDateTime($record->created_at ?? null)
                        ])
                    );
                    $syncCount++;
                }
            });

        Log::info("Synced {$syncCount} shipments");
    }

    /**
     * Fix common datetime fields in any record
     */
    private function fixDateTimeFields($recordArray)
    {
        $dateTimeFields = ['created_at', 'updated_at'];

        foreach ($dateTimeFields as $field) {
            if (isset($recordArray[$field])) {
                $recordArray[$field] = $this->parseDateTime($recordArray[$field]);
            }
        }

        return $recordArray;
    }

    /**
     * Parse datetime and handle invalid formats
     */
    private function parseDateTime($datetime)
    {
        if (empty($datetime) || $datetime === '0000-00-00 00:00:00' || $datetime === '0000-00-00') {
            return now();
        }

        try {
            return Carbon::parse($datetime);
        } catch (\Exception $e) {
            return now();
        }
    }

    /**
     * Parse date and handle invalid formats
     */
    private function parseDate($date)
    {
        if (empty($date) || $date === '0000-00-00' || $date === '0000-00-00 00:00:00') {
            return null;
        }

        try {
            return Carbon::parse($date)->format('Y-m-d');
        } catch (\Exception $e) {
            return null;
        }
    }
}
