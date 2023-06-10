<?php

use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::controller(ProductsController::class)->prefix('products')->as('products.')->group(
    static function () {
        Route::get('/', 'index')->name('index');
        Route::get('archive', 'archive')->name('archive');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{product?}', 'edit')->name('edit');
        Route::post('update', 'update')->name('update');
        Route::get('destroy/{product?}', 'destroy')->name('destroy');
    }
);

Route::controller(ProductCategoryController::class)->prefix('products-category')->as('products_category.')->group(
    static function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{productCategory?}', 'edit')->name('edit');
        Route::post('update', 'update')->name('update');
        Route::get('destroy/{productCategory?}', 'destroy')->name('destroy');
    }
);

