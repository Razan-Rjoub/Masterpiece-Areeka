<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




// Route::get('/cart', function () {
//     return view('cart.cart');
// });


Route::get('/about', function () {
    return view('aboutus.about');
});

Route::get('/adminn', function () {
    return view('Admin.index');
})->name('index');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/stores', [StoreController::class, 'index'])->name('store');
Route::get('/profilee', function () {
    return view('Admin.profile.profile');
})->name('profile');

Route::resource('/store', StoreController::class);
Route::resource('/category', CategoryController::class)->middleware(['auth', 'verified']);
Route::resource('/product',ProductController::class)->middleware(['auth', 'verified']);
Route::resource('/customer',UserController::class)->middleware(['auth', 'verified']);
Route::resource('/order',OrderController::class)->middleware(['auth', 'verified']);
Route::resource('/review',ReviewController::class)->middleware(['auth', 'verified']);
Route::resource('/adminuser',AdminController::class)->middleware(['auth', 'verified']);
Route::resource('/provider',ProviderController::class)->middleware(['auth', 'verified']);

Route::get('/editorder/{id}', [OrderController::class, 'editorder'])->name('editorder');
Route::get('/orderdetails/{id}', [OrderController::class, 'orderdetails'])->name('orderdetail');
Route::get('/products/{id}', [ProductController::class, 'products'])->name('product');
Route::get('/product-Category/{id}', [ProductController::class, 'productcat'])->name('productcat');
Route::get('/singleproduct/{id}', [ProductController::class, 'singleproduct'])->name('singleproduct');
Route::get('/wishlist/{id}', [WishlistController::class, 'create'])->name('wishlist');
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wish');
Route::get('/wishlistremove/{id}', [WishlistController::class, 'destroy'])->middleware(['auth', 'verified'])->name('wishlistremove');
Route::get('/addtocart/{id}', [CartController::class, 'store'])->name('addtocart');
Route::get('/quantitycart/{id}/{type}', [CartController::class, 'quantitycart'])->name('quantitycart');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/deletecart/{item}', [CartController::class, 'destroy'])->name('deletecart');
Route::get('/checkout', [CartController::class, 'Checkout'])->name('checkout');

Route::post('/checkoutcreate', [CartController::class, 'create'])->middleware(['auth', 'verified'])->name('checkoutcreate');
Route::view('/thankyou', 'thankyou');
Route::get('/profileuser', [ProfileController::class, 'index'])->name('profilee');
Route::post('/editprofile', [ProfileController::class, 'edit'])->name('editprofile');