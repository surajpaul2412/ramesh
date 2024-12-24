<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 
        'sku', 
        'description', 
        'price', 
        'sale_price', 
        'rating', 
        'primary_image', 
        'hover_image', 
        'label', 
        'is_featured', 
        'stock', 
        'type_id', 
        'category_id'
    ];

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

    // Define relationship with wishlists
    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    // Define relationship with cart
    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    // Check if the product is on sale
    public function isOnSale(): bool
    {
        return !is_null($this->sale_price) && $this->sale_price < $this->price;
    }

    // Get the formatted product rating
    public function formattedRating(): string
    {
        return $this->rating . ' / 5';
    }

    // Get the product's display price (sale price if available)
    public function displayPrice(): float
    {
        return $this->isOnSale() ? $this->sale_price : $this->price;
    }
}
