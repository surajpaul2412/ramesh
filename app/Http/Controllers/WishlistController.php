<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    /**
     * Display the wishlist items for the authenticated user.
     */
    public function index()
    {
        $wishlistItems = Wishlist::with('product')
            ->where('user_id', Auth::id())
            ->get();

        return view('wishlist', compact('wishlistItems'));
    }

    /**
     * Add a product to the wishlist.
     */
    public function add(Product $product)
    {
        $user = Auth::user();

        // Check if the product is already in the wishlist
        $exists = Wishlist::where('user_id', $user->id)
            ->where('product_id', $product->id)
            ->exists();

        if ($exists) {
            session()->flash('warning', 'Product is already in your wishlist!');
            return redirect()->back();
        }

        // Add the product to the wishlist
        Wishlist::create([
            'user_id' => $user->id,
            'product_id' => $product->id,
        ]);

        session()->flash('success', 'Product added to wishlist!');
        return redirect()->route('wishlist.index');
    }

    /**
     * Remove a product from the wishlist.
     */
    public function remove(Product $product)
    {
        $user = Auth::user();

        // Remove the product from the wishlist
        Wishlist::where('user_id', $user->id)
            ->where('product_id', $product->id)
            ->delete();

        session()->flash('success', 'Product removed from wishlist!');
        return redirect()->route('wishlist.index');
    }
}
