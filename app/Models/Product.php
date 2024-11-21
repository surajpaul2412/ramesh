<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'type_id', 'category_id', 'image'];

    // Define relationship with type
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    // Define relationship with category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
