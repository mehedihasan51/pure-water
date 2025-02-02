<?php

// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Frontend\HomeController;
use App\Http\Controllers\Web\Auth\UserloginController;
use App\Http\Controllers\Web\Frontend\AboutController;
use App\Http\Controllers\Web\Frontend\ContactController;
use App\Http\Controllers\Web\Auth\UserRegisteredController;
use App\Http\Controllers\Web\Backend\DashboardController;
use App\Http\Controllers\Web\Frontend\User_Dashboard\ShopController;
use App\Http\Controllers\Web\Frontend\User_Dashboard\PartnerController;
use App\Http\Controllers\Web\Frontend\User_Dashboard\PaymentController;
use App\Http\Controllers\Web\Frontend\User_Dashboard\ProductController;
use App\Http\Controllers\Web\Frontend\User_Dashboard\ProfileController;
use App\Http\Controllers\Web\Frontend\User_Dashboard\CategoriesController;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('user-dashboard');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('user-dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });




// after authtation route

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('about', [AboutController::class,'index'])->name('about');
Route::get('contact', [ContactController::class,'index'])->name('contact');
Route::post('contact', [ContactController::class,'store'])->name('contact.store');


// before authation route
// page route


Route::middleware(['auth','verified'])->group(function () {



    //Category List
Route::get('/CategoryList', [CategoriesController::class,'CategoryList']);


Route::get('profile',[ProfileController::class,'index'])->name('user.profile');
Route::get('shop', [ShopController::class, 'index'])->name('user.shop');
Route::get( 'product-deteils', [ProductController::class,'index'])->name('product.deteils');
Route::post('product-deteils', [ProductController::class,'store'])->name('rating.product');
Route::get('payment', [PaymentController::class,'index'])->name('payment.page');
Route::get('partner', [PartnerController::class,   'index'])->name('partner.page');


});





require __DIR__.'/auth.php';
