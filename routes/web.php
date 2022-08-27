<?php

use App\Http\Controllers\BalanceBoxController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
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
Route::get('/detail/{item}', [HomeController::class, 'detail'])->name('detail');

Route::middleware(['auth'])->group(function () {
    Route::group(['middleware' => 'role:admin'], function(){
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });

    Route::resource('item', ItemController::class);

    Route::get('/buy/{id}', [BalanceBoxController::class, 'buy'])->name('buy');
    Route::post('/buy', [BalanceBoxController::class, 'buy_store'])->name('buy.store');

    Route::get('/withdraw', [BalanceBoxController::class, 'withdraw'])->name('withdraw');
    Route::post('/withdraw', [BalanceBoxController::class, 'withdraw_store'])->name('withdraw.store');
});
