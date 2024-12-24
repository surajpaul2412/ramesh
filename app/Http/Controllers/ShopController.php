<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index($category = 'all')
    {
        if ($category === 'all') {
            $products = Product::all();
        } else {
            // $products = Product::where('category', $category)->get();
            // Fetch products based on category
            $categoryData = Category::where('slug', $category)->first();

            if (!$categoryData) {
                // If category doesn't exist, return 404
                abort(404, 'Category not found');
            }

            $products = Product::where('category_id', $categoryData->id)->get();
        }

        return view('shop', compact('products', 'category'));
    }
}
