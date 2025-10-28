<?php
// app/Services/SimpleSyncService.php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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

                    // Fix timestamp fields
                    $recordArray['created_at'] = $this->fixTimestamp($record->created_at ?? null);
                    $recordArray['updated_at'] = now();

                    DB::table('customers')->updateOrInsert(
                        ['id' => $record->id],
                        $recordArray
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

                    // Fix timestamp fields
                    $recordArray['created_at'] = $this->fixTimestamp($record->created_at ?? null);
                    $recordArray['updated_at'] = now();

                    // Fix last_login if it exists
                    if (isset($recordArray['last_login'])) {
                        $recordArray['last_login'] = $this->fixTimestamp($recordArray['last_login']);
                    }

                    DB::table('tb_users')->updateOrInsert(
                        ['id' => $record->id],
                        $recordArray
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

                    // Fix timestamp fields
                    $recordArray['created_at'] = $this->fixTimestamp($record->created_at ?? null);
                    $recordArray['updated_at'] = now();

                    DB::table('pickups')->updateOrInsert(
                        ['id' => $record->id],
                        $recordArray
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

                    // Fix timestamp fields
                    $recordArray['created_at'] = $this->fixTimestamp($record->created_at ?? null);
                    $recordArray['updated_at'] = now();

                    DB::table('shipments')->updateOrInsert(
                        ['id' => $record->id],
                        $recordArray
                    );
                    $syncCount++;
                }
            });

        Log::info("Synced {$syncCount} shipments");
    }

    private function fixTimestamp($timestamp)
    {
        if (empty($timestamp) || $timestamp === '0000-00-00 00:00:00') {
            return now();
        }
        return $timestamp;
    }
}
