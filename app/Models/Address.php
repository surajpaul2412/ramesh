<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'first_name', 
        'last_name', 
        'phone', 
        'email', 
        'default',
        'user_id',
        'street',
        'city',
        'state',
        'postal_code',
        'country',
        'type',
    ];

    // Define relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
