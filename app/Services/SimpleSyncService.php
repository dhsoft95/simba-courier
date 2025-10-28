<?php
// app/Services/SimpleSyncService.php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SimpleSyncService
{
    // Define allowed columns for each table based on your structure
    private $allowedColumns = [
        'customers' => [
            'id', 'name', 'incharge', 'address', 'order_no', 'phone',
            'email', 'country', 'image', 'entry_by', 'created_at', 'updated_at'
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
                    $recordArray = $this->filterAllowedColumns((array) $record, 'customers');

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
                    $recordArray = $this->filterAllowedColumns((array) $record, 'tb_users');

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
                    $recordArray = $this->filterAllowedColumns((array) $record, 'pickups');

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
                    $recordArray = $this->filterAllowedColumns((array) $record, 'shipments');

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
