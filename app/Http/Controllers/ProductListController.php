<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function index()
    {
        return view('app.search-products', [
            "products" => Product::latest()->searching(request(['search']))->get()
        ]);
    }
}
