<?php
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Web\Backend\DashboardController;
use App\Http\Controllers\Web\Backend\ClientsFeedbackController;
use App\Http\Controllers\Web\Backend\ProductsController;
use App\Http\Controllers\Web\Backend\UsersController;
use App\Http\Controllers\Web\Backend\AboutsController;
use App\Http\Controllers\Web\Backend\FaqsController;
use App\Http\Controllers\Web\Backend\MissionsController;
use App\Http\Controllers\Web\Backend\OurMissionsController;

Route::get("/dashboard", [DashboardController::class,"index"])->middleware(['auth', 'verified'])->name('dashboard');


// Route for User controll
Route::get('/user-page',[UsersController::class,'index'])->name('users.index');
Route::get('/user-page/create',[UsersController::class,'create'])->name('users.create');
Route::get('/users/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UsersController::class, 'update'])->name('user.update');
Route::post('/user-page/store',[UsersController::class,'store'])->name('users.store');
Route::patch('/user-page/status/{id}',[UsersController::class,'status'])->name('users.status');
Route::delete('user/destory/{id}', [UsersController::class, 'destory'])->name('user.destory');



//Route for About Us Controll
Route::get('admin/about', [AboutsController::class, 'index'])->name('about.index');
Route::put('about/update', [AboutsController::class,'update'])->name('about.update');

// Route for Faqs Controll
Route::get('faqs', [FaqsController::class,'index'])->name('faq.index');
Route::get('faqs/create', [FaqsController::class,  'create'])->name('faq.create');
Route::post('faqs/store', [FaqsController::class,'store'])->name( 'faq.store');
Route::get('faqs/edit/{id}', [FaqsController::class,'edit'])->name( 'faq.edit');
Route::put('faqs/update/{id}', [FaqsController::class,'update'])->name( 'faq.update');
Route::patch('/faqs/status/{id}', [FaqsController::class,'status'])->name('faqs.status');
Route::delete('faqs/destroy/{id}', [FaqsController::class,'destroy'])->name('faqs.destroy');

// Route for Our Mission Controll
Route::get("mission", [MissionsController::class,'index'])->name('our-mission.index');
Route::put('mission/update', [MissionsController::class,  'update'])->name('mission.update');



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