<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FlightController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Public routes
// Register User
Route::post('/register', [AuthController::class, 'register']);
// Login User
Route::post('/login', [AuthController::class, 'login']);
// Show all users
Route::get('/users', [UserController::class, 'index']);
// Show specific user
Route::get('/users/{id}', [UserController::class, 'show']);
// Show all flights
Route::get('/flights', [FlightController::class, 'index']);
//Show specific flight
Route::get('/flights/{id}', [FlightController::class, 'show']);

// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function() {
    // Logout User
    Route::post('/logout', [AuthController::class, 'logout']);
    // Create a new flight --- this should be removed or put behind some admin user
    Route::post('/flights', [FlightController::class, 'store']);
    // Create a reservation
    
    // Edit a reservation

    // Delete a reservation

});

