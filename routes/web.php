<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\WishlistController;
use App\Models\OrderItem;
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

require __DIR__ . '/auth.php';




// Route::get('/cart', function () {
//     return view('cart.cart');
// });

// ** About **/
Route::get('/about', function () {
    return view('aboutus.about');
})->name('about');
// ** Contact **/
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
// **          Admin          ***/


Route::get('/profilee', function () {
    return view('Admin.profile.profile');
})->name('profile');

Route::middleware(['auth', 'verified', 'checkRole:admin,provider'])->group(function () {
    Route::resource('/store', StoreController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/customer', UserController::class);
    Route::resource('/order', OrderController::class);
    Route::resource('/review', ReviewController::class);
    Route::resource('/adminuser', AdminController::class);
    Route::resource('/provider', ProviderController::class);
    Route::get('/adminn', function () {
        return view('Admin.index');
    })->name('index');
    Route::get('/vendor', function () {
        return view('Provider.index');
    });
});


Route::get('/editorder/{id}', [OrderController::class, 'editorder'])->name('editorder');

// **      Home **/
Route::get('/', [HomeController::class, 'index'])->name('home');
// **      Store **/
Route::get('/stores', [StoreController::class, 'index'])->name('store');
// **      Product     *** /
Route::get('/products/{id}', [ProductController::class, 'products'])->name('product');
Route::get('/products/{id}/{price}', [ProductController::class, 'fillterproducts'])->name('fillter');
Route::get('/product-Category/{id}/{store_id}', [ProductController::class, 'productcat'])->name('productcat');
// ****    Single Product *****/
Route::get('/singleproduct/{id}', [ProductController::class, 'singleproduct'])->name('singleproduct');
// ****    Wishlist **/
Route::get('/wishlist/{id}', [WishlistController::class, 'create'])->name('wishlist');
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wish');
Route::get('/wishlistremove/{id}', [WishlistController::class, 'destroy'])->middleware(['auth', 'verified'])->name('wishlistremove');
// ***     Cart  **/
Route::get('/addtocart/{id}', [CartController::class, 'store'])->name('addtocart');
Route::get('/quantitycart/{id}/{type}', [CartController::class, 'quantitycart'])->name('quantitycart');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/deletecart/{item}', [CartController::class, 'destroy'])->name('deletecart');
// ***     Checkout **/
Route::get('/checkout', [CartController::class, 'Checkout'])->name('checkout');
Route::post('/checkoutcreate', [CartController::class, 'create'])->middleware(['auth', 'verified'])->name('checkoutcreate');
Route::view('/thankyou', 'thankyou');
// **     Profile **/
Route::get('/profileuser', [ProfileController::class, 'index'])->name('profilee');
Route::post('/editprofile', [ProfileController::class, 'edit'])->name('editprofile');
// Route::get('/profileuser', [ProfileController::class, 'index'])->name('profilee');
// Route::get('/orderprofile', [ProfileController::class, 'orderprofile'])->name('profilee');
// ***       Order **/
Route::get('/orderitem/{id}', [OrderItemController::class, 'index'])->name('orderdetails');
Route::get('/orderdetails/{id}', [OrderController::class, 'orderdetails'])->name('orderdetail');
//**        Review */
Route::get('/review/{product_id}/{store_id}', [ReviewController::class, 'reviewcustomer'])->name('review');
Route::post('/reviewstore', [ReviewController::class, 'store'])->name('reviewstore');

//**** PayPal  */

Route::get('payment', [PaypalController::class, 'payment'])->name('payment');
Route::get('cancel', [PaypalController::class, 'cancel'])->name('payment.cancel');
Route::get('payment/success', [PaypalController::class, 'success'])->name('payment.success');
Route::get('/success', [PaypalController::class, 'successview'])->name('paysuccess');
Route::get('/cancell', [PaypalController::class, 'cancelview'])->name('cancel');

// ** Stripe *//

Route::get('stripe/payment', [StripeController::class, 'payment'])->name('stripe');
Route::get('stripe/cancel', [StripeController::class, 'cancel'])->name('stripe_cancel');
Route::get('stripe/success', [StripeController::class, 'success'])->name('stripe_success');
// Route::get('/success', [PaypalController::class, 'successview'])->name('paysuccess');
// Route::get('/cancell', [PaypalController::class, 'cancelview'])->name('cancel');