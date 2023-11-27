<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// ->middleware('auth:sanctum')

Route::post('login', [AuthController::class,'login']);
Route::post('logout', [AuthController::class,'logout']);
Route::post('register', [AuthController::class,'register']);