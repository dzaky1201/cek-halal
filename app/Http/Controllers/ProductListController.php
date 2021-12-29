<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;

class ProductListController extends Controller
{
    public function index()
    {
        return view('app.search-products', [
            "products" => Product::with('company')->latest()->searching(request(['search', 'is_halal', 'all']))->get()
        ]);
    }

    public function show(Product $product)
    {
        if ($product->is_halal == 'true') {
            return view('app.detail-page', ['product' => $product]);
        } else {
            $detail = Review::where('product_id', '=', $product->id)->get();
            return view('app.detail-nonHalal', ['product' => $product, 'detail' => $detail]);
        }
    }
}
