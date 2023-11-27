<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// ->middleware('auth:sanctum')

Route::post('login', [AuthController::class,'login']);
Route::post('logout', [AuthController::class,'logout']);
Route::post('register', [AuthController::class,'register']);