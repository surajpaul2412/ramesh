<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        // Initialize the query to fetch all products with relationships
        $query = Product::with('type', 'category');

        // Apply category filter only if it's selected
        if ($request->filled('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        // Apply type filter only if it's selected
        if ($request->filled('type')) {
            $query->whereHas('type', function ($q) use ($request) {
                $q->where('slug', $request->type);
            });
        }

        // Apply price range filter only if both min_price and max_price are provided
        if ($request->filled('min_price') && $request->filled('max_price')) {
            $query->whereBetween('sale_price', [$request->min_price, $request->max_price]);
        }

        // Paginate the results
        $products = $query->paginate(12);

        // Fetch all categories and types for filters
        $categories = Category::all();
        $types = Type::all();

        // Handle AJAX requests by returning only the products partial
        if ($request->ajax()) {
            return view('products', compact('products'))->render();
        }

        // For non-AJAX requests, return the full view
        return view('shop', compact('products', 'categories', 'types'));
    }

    public function category($slug) {
        $category = Category::where('slug', $slug)->firstOrFail();

        // Fetch products that belong to the category
        $products = Product::where('category_id', $category->id)->with('type', 'category')->paginate(12);

        // Return the view with products and category data
        return view('category', compact('category', 'products'));
    }

    public function type($slug) {
        $type = Type::where('slug', $slug)->firstOrFail();

        // Fetch products that belong to the type
        $products = Product::where('type_id', $type->id)->with('type', 'category')->paginate(12);

        // Return the view with products and category data
        return view('type', compact('type', 'products'));
    }
}
