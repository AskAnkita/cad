<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Handle user login
    public function login(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Check if the credentials are valid
        $user = User::where('email', $validated['email'])->first();

        if ($user && Hash::check($validated['password'], $user->password)) {
            // Authentication passed, login the user
            Auth::login($user);

            // Redirect to the dashboard
            return redirect()->route('dashboard');
        } else {
            // Authentication failed
            return redirect()->route('login')->withErrors(['email' => 'Invalid credentials.']);
        }
    }

    // Show dashboard
    public function dashboard()
    {
        $user = Auth::user();
        $contacts = Contact::all();
        $contactCounts = Contact::all()->count();
        $todaysContactsCounts = Contact::whereDate('created_at', now()->toDateString())->get()->count();
        return view('admin.dashboard', ['title' => 'CAD Dashboard',  'user' => $user, 'contacts' => $contacts, 'contactCounts' => $contactCounts, 'todaysContactsCounts' => $todaysContactsCounts]);
    }

    public function deleteInqury($id)
    {
        $contact = Contact::find($id);
        if ($contact) {
            $contact->delete();
            return redirect()->route('inquries')->with('success', 'Inquiry deleted successfully.');
        } else {
            return redirect()->route('inquries')->withErrors(['error' => 'Inquiry not found.']);
        }
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout(); // Log the user out

        // Redirect to the home page
        return redirect()->route('home');
    }
}
