<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReviewController;
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

Route::get('/dashboard', [AdminController::class, 'index'])->middleware('auth');

Route::resource('/dashboard/registers', RegisterController::class)->middleware('admin');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product-list', [ProductListController::class, 'index']);

Route::resource('/dashboard/products', ProductController::class)->middleware('auth');
Route::resource('/dashboard/reviews', ReviewController::class)->middleware('auth');
Route::resource('/dashboard/companies', CompanyController::class)->middleware('auth');
