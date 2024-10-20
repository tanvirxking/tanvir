<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\OrderController;

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

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('/product/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');


Route::get('/front-products', [FrontController::class, 'index'])->name('front-product.index');
Route::get('/single-product/{id}', [FrontController::class, 'singleProduct'])->name('single.product');
Route::get('/add-to-cart/{id}', [FrontController::class, 'addToCart'])->name('cart.add');
Route::get('/clear-cart', [FrontController::class, 'clearCart'])->name('clear.cart');
Route::get('/checkout', [FrontController::class, 'checkout'])->name('checkout');



Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('place.order');
Route::get('/order-list', [OrderController::class, 'index'])->name('order.list');
Route::get('/order-detail/{id}', [OrderController::class, 'show'])->name('order.show');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
