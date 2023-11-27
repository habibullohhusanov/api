<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductOrderController;
use App\Http\Controllers\ProductReviewController;
use Illuminate\Support\Facades\Route;

Route::apiResources([
    'orders' => OrderController::class,
    'products' => ProductController::class,
    'categories' => CategoryController::class,
    'favourites' => FavouriteController::class,
    'product.review' => ProductReviewController::class,
    'categories.products' => CategoryProductController::class,
]);