<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Store a new contact
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|string|max:15',
            'message' => 'required|string',
        ]);

        // Save the contact
        Contact::create($request->all());

        // Return a success message
        return back()->with('success', 'Your message has been sent successfully!');
    }

    // Display a list of contacts
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    // Show a single contact
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.show', compact('contact'));
    }

    // Delete a contact
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return back()->with('success', 'Contact deleted successfully.');
    }
}
