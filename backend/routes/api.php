<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;

Route::post('/register', [AuthController::class, 'register']);


// Default test route
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
