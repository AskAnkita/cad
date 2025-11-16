<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    // Show the contact form page
    public function showContactForm()
    {
        return view('contact', ['title' => 'Contact Us']);
    }

    // Handle contact form submission
    public function submitContactForm(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        // Save the contact message
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        // Return a success response
        return response()->json(['success' => true]);
    }

    // ---- Admin and Faculty Routes ----

    // Admin dashboard with contact statistics
    public function adminDashboard()
    {
        $totalcount = Contact::count();
        $todaycount = Contact::whereDate('created_at', today())->count();
        $pendingcount = Contact::where('status', 'pending')->count();
        $resolvedcount = $totalcount - $pendingcount;

        // Get contacts ordered by creation date
        $contacts = Contact::orderBy('created_at', 'desc')->get();

        return view('admin.dashboard', compact('totalcount', 'todaycount', 'pendingcount', 'resolvedcount', 'contacts'));
    }

    // Manage all contacts
    public function manageContacts()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('admin.contacts', ['title' => 'Manage Contacts', 'contacts' => $contacts]);
    }

    // Edit a contact
    public function editContact(Contact $contact)
    {
        return view('admin.editContact', ['contact' => $contact, 'title' => 'Edit Contact']);
    }

    // Update a contact
    public function updateContact(Request $request, Contact $contact)
    {
        // Validate input
        $request->validate([
            'status' => 'required|string|in:pending,resolved',
        ]);

        // Update the contact
        $contact->update([
            'status' => $request->status,
        ]);

        return redirect()->route('admin.contacts')->with('success', 'Contact updated successfully');
    }

    // Delete a contact
    public function deleteContact(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contacts')->with('success', 'Contact deleted successfully');
    }
}
