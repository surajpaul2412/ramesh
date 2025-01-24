<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'street' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'nullable|string|max:100',
            'postal_code' => 'required|string|max:20',
            'country' => 'required|string|max:100',
            'type' => 'nullable|string|in:billing,shipping',
            'default' => 'nullable|boolean',
        ]);

        // Save the address
        Address::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'user_id' => auth()->id(),
            'street' => $request->street,
            'city' => $request->city,
            'state' => $request->state,
            'postal_code' => $request->postal_code,
            'country' => $request->country,
            'type' => $request->type ?? 'billing',
            'default' => $request->default ?? false,
        ]);

        return back()->with('success', 'Address added successfully!');
    }

    public function remove($id)
    {
        // Find the address by its ID and ensure it belongs to the authenticated user
        $address = Address::where('id', $id)->where('user_id', auth()->id())->first();

        if (!$address) {
            return back()->with('error', 'Address not found or you are not authorized to delete it.');
        }

        // Delete the address
        $address->delete();

        return back()->with('success', 'Address removed successfully!');
    }
}
