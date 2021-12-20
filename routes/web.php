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


// admin-view dashboard 

Route::get('/admin/view/products', function () {
    return view('dashboard/view-data/products-data');
});

Route::get('/admin/view/reviews', function () {
    return view('dashboard/view-data/reviews-data');
});

Route::get('/admin/view/companies', function () {
    return view('dashboard/view-data/companies-data');
});

Route::get('/admin/view/admins', function () {
    return view('dashboard/view-data/data-admin');
});

// App pages

Route::get('/home', function () {
    return view('app/index');
});

Route::get('/search', function () {
    return view('app/search-products');
});

Route::get('/detail', function () {
    return view('app/detail-page');
});

Route::get('/detail/nonhalal', function () {
    return view('app/detail-nonHalal');
});
