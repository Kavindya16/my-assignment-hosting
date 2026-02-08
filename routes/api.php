<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Api\ProductApiController;








// AUTH ROUTES
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/products', [ProductApiController::class, 'index']);

// PROTECTED ROUTE
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
