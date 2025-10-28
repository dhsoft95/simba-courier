<?php
// app/Models/Branch.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = [
        'name', 'address', 'phone', 'email', 'region_id',
        'entry_by', 'managed_by'
    ];

    // Relationships
    public function pickups()
    {
        return $this->hasMany(Pickup::class, 'dropping_point');
    }

    public function shipments()
    {
        return $this->hasMany(Shipment::class, 'branch_id');
    }
}
