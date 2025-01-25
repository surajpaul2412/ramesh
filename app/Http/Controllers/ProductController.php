<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd("hi");
        $products = Product::with('type', 'category')->get(); // Fetch 10 products per page
        dd($products);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        // Fetch the product by slug
        $product = Product::whereSlug($slug)->first();

        // If product not found, show 404
        if (!$product) {
            abort(404, 'Product not found.');
        }

        // Pass the product data to the view
        return view('product-detail', compact('product'));
    }

    public function show1()
    {
        // Pass the product data to the view
        return view('product-detail');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
