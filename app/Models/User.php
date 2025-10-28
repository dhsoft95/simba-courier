<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    protected $table = 'tb_users';

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'first_name',
        'last_name',
        'customer_id',
        'user_type'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getNameAttribute()
    {
        return $this->username;
    }

    // Relationship to customer
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    // Check if user is a customer
    public function isCustomer()
    {
        return $this->user_type === 'customer' && !empty($this->customer_id);
    }
}
