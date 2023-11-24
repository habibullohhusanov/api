<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductReviewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// ->middleware('auth:sanctum')
Route::post('login', [AuthController::class,'login']);
Route::post('logout', [AuthController::class,'logout']);
Route::post('register', [AuthController::class,'register']);

Route::apiResources([
    'categories' => CategoryController::class,
    'products' => ProductController::class,
    'categories.products' => CategoryProductController::class,
    'favourites' => FavouriteController::class,
    'product.review' => ProductReviewController::class,
]);