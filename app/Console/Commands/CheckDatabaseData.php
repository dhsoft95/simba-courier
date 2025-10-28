<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Shipment;
use App\Models\Customer;

class CheckDatabaseData extends Command
{
    protected $signature = 'db:check-shipments';
    protected $description = 'Check actual status values and data in shipments table';

    public function handle()
    {
        $this->info('=== CHECKING ACTUAL STATUS VALUES ===');

        $statuses = Shipment::select('status_id')
            ->distinct()
            ->whereNotNull('status_id')
            ->pluck('status_id')
            ->toArray();

        $this->info('Found these status values:');
        foreach($statuses as $status) {
            $count = Shipment::where('status_id', $status)->count();
            $this->line("- '$status' ($count shipments)");
        }

        $this->info("\n=== SAMPLE SHIPMENT DATA ===");
        $sample = Shipment::select('id', 'waybill', 'status_id', 'customer_id')
            ->limit(5)
            ->get();

        foreach($sample as $shipment) {
            $this->line("ID: {$shipment->id}, Waybill: {$shipment->waybill}, Status: '{$shipment->status_id}', Customer: {$shipment->customer_id}");
        }

        $this->info("\n=== CUSTOMER CHECK ===");
        $customers = Customer::select('id', 'name')->limit(3)->get();
        foreach($customers as $customer) {
            $shipmentCount = Shipment::where('customer_id', $customer->id)->count();
            $this->line("Customer {$customer->id}: {$customer->name} - {$shipmentCount} shipments");
        }

        $this->info("\n=== STATUS SUMMARY ===");
        $this->table(
            ['Status', 'Count', 'Percentage'],
            collect($statuses)->map(function($status) {
                $count = Shipment::where('status_id', $status)->count();
                $total = Shipment::count();
                $percentage = $total > 0 ? round(($count / $total) * 100, 1) : 0;
                return [$status, $count, $percentage . '%'];
            })->toArray()
        );

        return 0;
    }
}
