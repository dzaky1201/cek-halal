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
    return view('login');
});

Route::get('/admin', function () {
    return view('admin-main');
});

Route::get('/admin/add/company', function () {
    return view('add-company');
});

Route::get('/admin/add/product', function () {
    return view('add-product-desc');
});

Route::get('/admin/add/review', function () {
    return view('add-product-review');
});

Route::get('/super-admin', function () {
    return view('super-admin');
});

Route::get('/super-admin/register', function () {
    return view('register');
});
