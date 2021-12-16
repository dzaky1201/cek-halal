<?php

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

Route::get('/', function () {
    return view('/auth/login');
});

// Admin pages

Route::get('/admin', function () {
    return view('admin-main');
});

Route::get('/admin/add/company', function () {
    return view('dashboard/add-company');
});

Route::get('/admin/add/product', function () {
    return view('dashboard/add-product-desc');
});

Route::get('/admin/add/review', function () {
    return view('dashboard/add-product-review');
});

Route::get('/admin/add/success', function () {
    return view('dashboard/add-success');
});

Route::get('/super-admin', function () {
    return view('dashboard/super-admin');
});

Route::get('/super-admin/register', function () {
    return view('add-admin');
});

// App pages

Route::get('/home', function () {
    return view('app/index');
});

Route::get('/search', function () {
    return view('app/search-products');
});
