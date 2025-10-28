<?php
// app/Models/User.php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'tb_users';

    protected $fillable = [
        'group_id', 'username', 'password', 'email', 'first_name', 'last_name',
        'avatar', 'active', 'login_attempt', 'last_login', 'reminder', 'activation',
        'remember_token', 'last_activity', 'config', 'company_name', 'address',
        'city', 'phone', 'license_no', 'license_exp_date', 'user_type',
        'entry_by', 'customer_id', 'driver_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'last_login' => 'datetime',
        'license_exp_date' => 'date',
        'active' => 'boolean',
    ];

    public function getNameAttribute()
    {
        return $this->username;
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function isCustomer()
    {
        return $this->user_type === 'customer' && !empty($this->customer_id);
    }

    public function getCustomerIdsAttribute()
    {
        if (empty($this->customer_id)) {
            return [];
        }

        return array_map('trim', explode(',', $this->customer_id));
    }

    // Mutator to set customer IDs from array
    public function setCustomerIdsAttribute(array $customerIds)
    {
        $this->attributes['customer_id'] = implode(',', array_filter($customerIds));
    }

    // Relationship to get actual Customer models (optional)
    public function linkedCustomers()
    {
        return Customer::whereIn('id', $this->customer_ids)->get();
    }

    // Helper method to check if user has a specific customer
    public function hasCustomer($customerId)
    {
        return in_array($customerId, $this->customer_ids);
    }
}
