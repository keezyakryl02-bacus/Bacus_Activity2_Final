<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

// Public Welcome Page
Route::get('/', function () {
    return view('welcome');
});

// Force Login Route (Visit this first: localhost:8000/force-login)
Route::get('/force-login', function () {
    session(['user_logged_in' => true]);
    return redirect()->route('customers.index');
});

// Use the resource directly. The Controller's __construct will handle the security.
Route::resource('customers', CustomerController::class);

Route::get('/mobile-app', function () {
    return view('mobile_preview');
})->name('login');

Route::get('/admin-dashboard', function () {
    return view('admin_dashboard');
})->name('admin.dashboard');
