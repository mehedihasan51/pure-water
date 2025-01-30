<?php

// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Frontend\HomeController;
use App\Http\Controllers\Web\Auth\UserloginController;
use App\Http\Controllers\Web\Frontend\AboutController;
use App\Http\Controllers\Web\Frontend\ContactController;
use App\Http\Controllers\Web\Frontend\User_Dashboard\ShopController;
use App\Http\Controllers\Web\Frontend\User_Dashboard\ProfileController;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('user-dashboard');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('user-dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// after authtation route

Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/about', [AboutController::class,'index'])->name('about');
Route::get('/contact', [ContactController::class,'index'])->name('contact');


// before authation route
// page route
Route::get('/profile',[ProfileController::class,'index'])->name('user.profile');
Route::post('/login/check', [UserloginController::class, 'userCheck'])->name('user.login');
Route::post('/login/logout', [UserloginController::class, 'destroy'])->name('user.logout');
Route::get('/shop', [ShopController::class, 'index'])->middleware(['auth', 'verified'])->name('user.shop');
    
    




require __DIR__.'/auth.php';
