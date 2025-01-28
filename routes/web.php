<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\Frontend\AboutController;
use App\Http\Controllers\Web\Frontend\ContactController;
use App\Http\Controllers\Web\Frontend\HomeController;
use App\Http\Controllers\Web\Frontend\User_Dashboard\PartnerController;
use App\Http\Controllers\Web\Frontend\User_Dashboard\PaymentController;
use App\Http\Controllers\Web\Frontend\User_Dashboard\ProductController;
use App\Http\Controllers\Web\Frontend\User_Dashboard\ShopController;
use App\Http\Controllers\Web\Frontend\User_Dashboard\ProfileController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/user-dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('user-dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/user-page', [ProfileController::class, 'userPage'])->name('user-page')->middleware(['auth', 'verified']);

//~ Route for Non Authenticate and Web Pages
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
// Contact stour route
Route::post('/contact', [ContactController::class, 'store'])->name('store');

//# Route for User Dashboard page
Route::get('/shop-page',[ShopController::class,'index'])->name('user.shop-page');
Route::get('/product-details-page',[ProductController::class,'index'])->name('user.product-details-page');
Route::get('/payment-page',[PaymentController::class,'index'])->name('user.payment-page');
Route::get('/profile-page',[ProfileController::class,'index'])->name('user.profile-page');
Route::get('/partner-page',[PartnerController::class,'index'])->name('user.partner-page');


require __DIR__.'/auth.php';
