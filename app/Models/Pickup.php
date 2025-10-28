<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pickup extends Model
{
    protected $fillable = [
        'initiator_id',
        'pickup_code',
        'waybill',
        'item_description',
        'driver_id',
        'collection_date',
        'quantity',
        'weight',
        'status_id',
        'pickup_point',
        'fleet_type',
        'dropping_point',
        'status_description',
        'entry_by',
        'notification'
    ];

    protected $casts = [
        'collection_date' => 'date',
    ];

    // Relationship to customer (through initiator_id)
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'initiator_id');
    }

    // Relationship to shipment (when waybill is assigned)
    public function shipment()
    {
        return $this->belongsTo(Shipment::class, 'waybill', 'waybill');
    }

    // Add to Pickup model
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'dropping_point');
    }
}
