<?php

use App\Http\Controllers\BalanceBoxController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/detail/{product}', [HomeController::class, 'detail'])->name('detail');

Route::middleware(['auth'])->group(function () {
    Route::group(['middleware' => 'role:admin'], function(){
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('/product', ProductController::class);
        Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction.index');
        Route::get('/transaction/{transaction}', [TransactionController::class, 'update'])->name('transaction.update');
    });

    Route::group(['middleware' => 'role:user'], function(){
        Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
        Route::get('/add-cart/{product}', [HomeController::class, 'addCart'])->name('cart.create');
        Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
        Route::post('/transaction', [TransactionController::class, 'store'])->name('transaction.store');
    });
});
