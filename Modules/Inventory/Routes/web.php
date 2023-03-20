<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('inventory')->group(function() {
    Route::view('/products', 'inventory::livewire.administration.product.index');
    Route::view('/products/config/{id}', 'inventory::livewire.administration.product.config.index');

    Route::view('/categories', 'inventory::livewire.administration.category.index');

});