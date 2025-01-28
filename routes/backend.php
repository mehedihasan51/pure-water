<?php
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Web\Backend\DashboardController;
use App\Http\Controllers\Web\Backend\ClientsFeedbackController;
use App\Http\Controllers\Web\Backend\ProductsController;

Route::get("/dashboard", [DashboardController::class,"index"])->middleware(['auth', 'verified'])->name('dashboard');



//! Route for ClientsFeedback Backend
Route::controller(ClientsFeedbackController::class)->group(function () {
    Route::get('/clients-feedback', 'index')->name('clients-feedback.index');
    Route::get('/clients-feedback/create', 'create')->name('clients-feedback.create');
    Route::post('/clients-feedback/store', 'store')->name('clients-feedback.store');
    Route::get('/clients-feedback/edit/{id}', 'edit')->name('clients-feedback.edit');
    Route::put('/clients-feedback/update/{id}', 'update')->name('clients-feedback.update');
    Route::patch('/clients-feedback/status/{id}', 'status')->name('clients-feedback.status');
    Route::delete('/clients-feedback/destroy/{id}', 'destroy')->name('clients-feedback.destroy');


});

Route::controller(ProductsController::class)->group(function () {

    Route::get('/products','index')->name('products.index');
    Route::get('/products/create', 'create')->name('products.create');
    Route::post('/products/store', 'store')->name('products.store');
    Route::get('/products/edit/{id}', 'edit')->name('products.edit');
    Route::put('/products/update/{id}', 'update')->name('products.update');
    Route::patch('/products/status/{id}', 'status')->name('products.status');
    Route::delete('/products/destroy/{id}', 'destroy')->name('products.destroy');
});