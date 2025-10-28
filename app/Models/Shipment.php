<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $table = 'shipments';

    protected $fillable = [
        'shipment_key',
        'waybill',
        'shipment_date',
        'pickup_address',
        'pickup_time',
        'source_branch_id',
        'pickup_reference',
        'customer_id',
        'scenarios',
        'branch_id',
        'agent_id',
        'destination',
        'item_description',
        'transporter_id',
        'driver_id',
        'quantity',
        'dispatch_id',
        'receiver_name',
        'receiver_phone',
        'receiving_date',
        'receiver_signature',
        'delivered_by',
        'delivery_boy_signature',
        'image_proof',
        'remarks',
        'weight',
        'grn',
        'status_id',
        'shipment_type',
        'entry_by',
        'loaded_by',
        'receiving_time'
    ];

    // Relationship to customer
    public function customer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
