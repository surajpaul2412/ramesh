<?php

use App\Models\Type;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Product;

function types() {
    $types = Type::all();
    return $types;
}

function categories() {
    $categories = Category::all();
    return $categories;
}

if (!function_exists('calculateCartTotal')) {
    /**
     * Calculate the total amount of the cart for the authenticated user.
     *
     * @return float
     */
    function calculateCartTotal()
    {
        $userId = auth()->id(); // Get the currently authenticated user's ID

        if (!$userId) {
            return 0; // Return 0 if the user is not authenticated
        }

        // Join cart with products and calculate total
        $cartTotal = Cart::where('user_id', $userId)
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->selectRaw('SUM(products.sale_price * carts.quantity) as total')
            ->value('total');

        return $cartTotal ?? 0; // Return 0 if the cart is empty
    }
}