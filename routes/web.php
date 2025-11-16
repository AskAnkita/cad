<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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

Route::group(['prefix' => 'contacts'], function () {
    // Show the contact form
    Route::get('/', function () {
        return view('contact');
    });

    // Handle form submission
    Route::post('/', [ContactController::class, 'store'])->name('contact.submit');
});

// --------------- Auth mangaement routes ----------------
// Show the login form
Route::get('/login', function () {
    return view('login', ['title' => 'Login']);
})->name('login');

// Submit the login form
Route::post('/login', [UserController::class, 'login'])->name('login.submit');

// Dashboard (protected route)
Route::middleware('auth')->get('/dashboard',  [UserController::class, 'dashboard'])->name('dashboard');
Route::middleware('auth')->delete('{id}',  [UserController::class, 'deleteInqury'])->name('delete_inqury');

// Handle logout
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
