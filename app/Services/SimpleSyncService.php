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

                    DB::table('customers')->updateOrInsert(
                        ['id' => $record->id],
                        array_merge($recordArray, [
                            'updated_at' => now(),
                            'created_at' => $record->created_at ?? now()
                        ])
                    );
                    $syncCount++;
                }
            });

        Log::info("Synced {$syncCount} customers");
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

                    DB::table('pickups')->updateOrInsert(
                        ['id' => $record->id],
                        array_merge($recordArray, [
                            'updated_at' => now(),
                            'created_at' => $record->created_at ?? now()
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

                    DB::table('shipments')->updateOrInsert(
                        ['id' => $record->id],
                        array_merge($recordArray, [
                            'updated_at' => now(),
                            'created_at' => $record->created_at ?? now()
                        ])
                    );
                    $syncCount++;
                }
            });

        Log::info("Synced {$syncCount} shipments");
    }
}
