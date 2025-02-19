<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validate email input
            $request->validate([
                'email' => 'required|email|unique:subscriptions,email',
            ]);
            
            // Save email to the database
            Subscription::create([
                'email' => $request->email,
            ]);

            // Return success message
            return back()->with('success', 'You have successfully subscribed!');
        } catch (\Exception $e) {
            // Return custom error message
            return back()->with('success', 'Thanks for Subscribing.');
        }
    }
}
