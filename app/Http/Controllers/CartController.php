<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display the cart items for the authenticated user.
     */
    public function index()
    {
        $cartItems = Cart::with('product')
            ->where('user_id', Auth::id())
            ->get();

        return view('cart', compact('cartItems'));
    }

    /**
     * Add a product to the cart.
     */
    public function add(Product $product, Request $request)
    {
        $user = Auth::user();

        // Check if the product is already in the cart
        $cartItem = Cart::where('user_id', $user->id)
            ->where('product_id', $product->id)
            ->first();

        if ($cartItem) {
            // If exists, update the quantity
            $cartItem->increment('quantity', $request->quantity ?? 1);
            session()->flash('success', 'Product quantity updated in cart!');
        } else {
            // Add the product to the cart
            Cart::create([
                'user_id' => $user->id,
                'product_id' => $product->id,
                'quantity' => $request->quantity ?? 1,
            ]);
            session()->flash('success', 'Product added to cart!');
        }

        return redirect()->route('cart.index');
    }

    /**
     * Remove a product from the cart.
     */
    public function remove($id)
    {
        $user = Auth::user();

        // Remove the product from the cart
        Cart::findOrFail($id)
            ->delete();

        session()->flash('success', 'Product removed from cart!');
        return redirect()->route('cart.index');
    }

    /**
     * Update the quantity of a product in the cart.
     */
    public function update(Request $request, $id)
    {
        $cartItem = Cart::where('id', $id)
            ->where('user_id', Auth::id())
            ->first();

        if ($cartItem) {
            $cartItem->update(['quantity' => $request->quantity]);
            session()->flash('success', 'Product quantity updated!');
        } else {
            session()->flash('error', 'Product not found in cart!');
        }

        return redirect()->route('cart.index');
    }

    public function checkout()
    {
        $user = Auth::user();

        // Retrieve cart items for the authenticated user
        $cartItems = Cart::with('product')->where('user_id', $user->id)->get();

        // Calculate total price
        $totalPrice = $cartItems->sum(function ($item) {
            return $item->quantity * $item->product->price;
        });

        return view('checkout', compact('cartItems', 'totalPrice'));
    }

    public function processCheckout(Request $request)
    {
        $user = Auth::user();

        // Retrieve cart items
        $cartItems = Cart::where('user_id', $user->id)->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        // Example: Save order details to the database
        // You would typically create an Order model for this
        $order = Order::create([
            'user_id' => $user->id,
            'total_price' => $cartItems->sum(function ($item) {
                return $item->quantity * $item->product->price;
            }),
            'status' => 'Pending',
        ]);

        // Save each cart item as an order item
        foreach ($cartItems as $cartItem) {
            $order->orderItems()->create([
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->product->price,
            ]);
        }

        // Clear the cart
        Cart::where('user_id', $user->id)->delete();

        return redirect()->route('cart.index')->with('success', 'Checkout successful. Your order is being processed.');
    }
}
