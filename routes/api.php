<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request; // 👈 Make sure this line is at the top!

// Open Guest Gateways (1 & 2)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Secure Token-Protected Gateways (3, 4, & 5)
Route::middleware('auth:sanctum')->group(function () {

    // Endpoint 3: Fetch the clothes catalog list
    Route::get('/products', [ProductController::class, 'index']);

    // Endpoint 4: Handle clicking "Add to Cart" 
    Route::post('/cart/add', [ProductController::class, 'addToCart']); // 👈 ADD THIS

    // Endpoint 5: Get current logged-in user profile info
    Route::get('/user', function (Request $request) {                  // 👈 ADD THIS
        return $request->user();
    });
});
