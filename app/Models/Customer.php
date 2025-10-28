<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = [
        'name',
        'incharge',
        'address',
        'order_no',
        'phone',
        'email',
        'country',
        'image',
        'entry_by'
    ];

    // Relationship to shipments
    public function shipments()
    {
        return $this->hasMany(Shipment::class, 'customer_id');
    }
}
