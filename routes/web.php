<?php

use App\Http\Controllers\DashboardCategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardItemsController;
use App\Http\Controllers\GuestAllItemsController;
use App\Http\Controllers\GuestHomeController;
use App\Http\Controllers\GuestTransactionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

/**
 * Route for Guest
 */
route::get('/', [GuestHomeController::class, "index"]);
route::get('/home', [GuestHomeController::class, "index"])
->name('home');
route::get('/carts', [GuestCartController::class, "index"])
->name('home');
route::get('/allitems', [GuestAllItemsController::class, "index"])
->name('allitems');
route::get('/transactions', [GuestTransactionController::class, "index"])
->name('transactions')->middleware('auth');
// route::resource('/transactions', GuestTransactionController::class)->middleware('auth');
// ----------------------------------------------------------------------------------------

/**
 * Route for Dashboard
 */
route::get('/dashboard', [DashboardController::class, "index"])
->name('dashboard')->middleware('admin');
route::get('/home', [GuestHomeController::class, "index"])
->name('home');

Route::get('/items/checkSlug', [DashboardItemsController::class, 'checkSlug']);
route::resource('/items', DashboardItemsController::class)->middleware('admin');
route::resource('/categories', DashboardCategoriesController::class)->except('show')->middleware('admin');


// ----------------------------------------------------------------------------------------

/**
 * Route for Auth
 */

// login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// register
Route::get('/register', [RegisterController::class, 'index'])
    ->name('register');
Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

