<?php

use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\OfferController;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\ProductController;
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

Route::controller(LoginController::class)->group(static function () {
    Route::any('login', 'login')->middleware('post.method.check');
});

Route::controller(ProductController::class)->middleware('auth:sanctum')->prefix('products')->group(static function () {
    Route::any('/', 'index');
});

Route::controller(OrderController::class)->middleware(['post.method.check', 'auth:sanctum'])->prefix('order')->group(
    static function () {
        Route::any('store', 'store');
        Route::any('show/{id}', 'show');
    }
);

Route::controller(OfferController::class)->middleware(['post.method.check', 'auth:sanctum'])->prefix('offer')->group(
    static function () {
        Route::any('rules', 'rulesForCreateOffer');
        Route::any('store', 'store');
    }
);
