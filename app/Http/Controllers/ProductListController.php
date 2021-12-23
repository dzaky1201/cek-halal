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

    public function show(Product $product)
    {
        if ($product->is_halal == 'true') {
            return view('app.detail-page', ['product' => $product]);
        } else {
            return view('app.detail-nonHalal', ['product' => $product]);
        }
    }
}
