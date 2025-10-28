<?php
// Run this in php artisan tinker to see actual status values

// Check what status values exist in your database
echo "=== CHECKING ACTUAL STATUS VALUES ===\n";

$statuses = App\Models\Shipment::select('status_id')
    ->distinct()
    ->whereNotNull('status_id')
    ->pluck('status_id')
    ->toArray();

echo "Found these status values:\n";
foreach($statuses as $status) {
    $count = App\Models\Shipment::where('status_id', $status)->count();
    echo "- '$status' ($count shipments)\n";
}

echo "\n=== SAMPLE SHIPMENT DATA ===\n";
$sample = App\Models\Shipment::select('id', 'waybill', 'status_id', 'customer_id')
    ->limit(5)
    ->get();

foreach($sample as $shipment) {
    echo "ID: {$shipment->id}, Waybill: {$shipment->waybill}, Status: '{$shipment->status_id}', Customer: {$shipment->customer_id}\n";
}

echo "\n=== CUSTOMER CHECK ===\n";
$customers = App\Models\Customer::select('id', 'name')->limit(3)->get();
foreach($customers as $customer) {
    $shipmentCount = App\Models\Shipment::where('customer_id', $customer->id)->count();
    echo "Customer {$customer->id}: {$customer->name} - {$shipmentCount} shipments\n";
}
