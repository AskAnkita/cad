<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/* GET home page */
Route::get('/', function () {
    return view('home', ['title' => 'Home']);
})->name('home');

/* GET courses page */
Route::get('/course', function () {
    return view('course', ['title' => 'Courses']);
})->name('course');

/* GET contact form page */
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
})->name('contact');

/* GET about us page */
Route::get('/about', function () {
    return view('about', ['title' => 'About Us']);
})->name('about');

/* GET gallery page */
Route::get('/gallery', function () {
    return view('gallery', ['title' => 'Gallery']);
})->name('gallery');

/* GET login page */
Route::get('/login', function () {
    return view('login', ['title' => 'Login']);
})->name('login');

/* GET Advance Business Accounting page */
Route::get('/advance-business-accounting', function () {
    return view('learnmore.advance-business-accounting', ['title' => 'Advance Business Accounting']);
})->name('advance-business-accounting');

/* GET Advanced Stitching page */
Route::get('/advanced-stitching', function () {
    return view('learnmore.advanced-stitching', ['title' => 'Advanced Stitching']);
})->name('advanced-stitching');

/* GET Basic Business Accounting page */
Route::get('/basic-business-accounting', function () {
    return view('learnmore.basic-business-accounting', ['title' => 'Basic Business Accounting']);
})->name('basic-business-accounting');

/* GET Basic Stitching page */
Route::get('/basic-stitching', function () {
    return view('learnmore.basic-stitching', ['title' => 'Basic Stitching']);
})->name('basic-stitching');

/* GET Digital Marketing page */
Route::get('/digital-marketing', function () {
    return view('learnmore.digital-marketing', ['title' => 'Digital Marketing']);
})->name('digital-marketing');

/* GET Diploma in Fashion Design page */
Route::get('/diploma-fashion', function () {
    return view('learnmore.diploma-fashion', ['title' => 'Diploma in Fashion Design']);
})->name('diploma-fashion');

/* GET Fashion Styling page */
Route::get('/fashion-styling', function () {
    return view('learnmore.fashion-styling', ['title' => 'Fashion Styling']);
})->name('fashion-styling');

/* GET Software Specialization page */
Route::get('/software-specialization', function () {
    return view('learnmore.software-specialization', ['title' => 'Software Specialization']);
})->name('software-specialization');

/* GET Surface Ornamentation page */
Route::get('/surface-ornamentation', function () {
    return view('learnmore.surface-ornamentation', ['title' => 'Surface Ornamentation']);
})->name('surface-ornamentation');



// ---- Contact Management Routes ----

Route::get('/', [ContactController::class, 'showContactForm'])->name('contact.form');  // Contact form

Route::post('/', [ContactController::class, 'submitContactForm'])->name('contact.submit');  // Handle contact form submission

// ---- Faculty Protected Routes ----

Route::middleware(['auth', 'role:faculty'])->group(function () {
    Route::get('/admin/dashboard', [ContactController::class, 'adminDashboard'])->name('admin.dashboard');  // Admin dashboard
    Route::get('/admin/contacts', [ContactController::class, 'manageContacts'])->name('admin.contacts');  // Manage all contacts
    Route::get('/admin/contacts/{contact}/edit', [ContactController::class, 'editContact'])->name('admin.contacts.edit');  // Edit a contact
    Route::put('/admin/contacts/{contact}', [ContactController::class, 'updateContact'])->name('admin.contacts.update');  // Update a contact
    Route::delete('/admin/contacts/{contact}', [ContactController::class, 'deleteContact'])->name('admin.contacts.delete');  // Delete a contact
});