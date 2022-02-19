<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\RateController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\OrderController;
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
// hompage route
Route::get('/', [FrontendController::class, 'home'])->name('home');
// about us
Route::get('/about-us', [FrontendController::class, 'about'])->name('about');
// FAQ
Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
// support
Route::get('/support', [FrontendController::class, 'support'])->name('support');
// rate
Route::get('/exchange-rate', [FrontendController::class, 'exchangeRate'])->name('exchange-rate');
// sell
Route::get('/sell', [FrontendController::class, 'sell'])->name('sell');
Route::get('/sell', [FrontendController::class, 'sell'])->name('sell');

Auth::routes();

Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');

// ==============ADMIN DASHBOARD ROUTE ======================//
Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'name' => 'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // :::::::::::Rate ROUTES:::::::::::
    Route::controller(RateController::class)->prefix('rate')->group(function () {
        Route::get('/all', 'index')->name('rate.index');
        Route::get('/create', 'create')->name('rate.create');
        Route::post('/store', 'store')->name('rate.store');
        Route::get('/edit/{uid}', 'edit')->name('rate.edit');
        Route::post('/update/{uid}', 'update')->name('rate.update');
        Route::post('/delete/{uid}', 'destroy')->name('rate.destroy');
    });

    // :::::::::::FAQ ROUTES:::::::::::
    Route::controller(FaqController::class)->prefix('faq')->group(function () {
        Route::get('/all', 'index')->name('faq.index');
        Route::get('/create', 'create')->name('faq.create');
        Route::post('/store', 'store')->name('faq.store');
        Route::get('/edit/{uid}', 'edit')->name('faq.edit');
        Route::post('/update/{uid}', 'update')->name('faq.update');
        Route::post('/delete/{uid}', 'destroy')->name('faq.destroy');
    });

    // :::::::::::ORDER ROUTES:::::::::::
    Route::controller(OrderController::class)->prefix('order')->group(function () {
        Route::get('/all', 'index')->name('order.index');
        Route::get('/create', 'create')->name('order.create');
        Route::get('/show/{uid}', 'show')->name('order.show');
        Route::get('/edit/{uid}', 'edit')->name('order.edit');
        Route::post('/update/{uid}', 'update')->name('order.update');
        Route::post('/delete/{uid}', 'destroy')->name('order.destroy');
    });
});