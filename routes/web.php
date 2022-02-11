<?php

use App\Http\Controllers\FrontendController;
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