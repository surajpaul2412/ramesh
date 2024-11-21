<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['name'];

    // Define relationship with products
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
