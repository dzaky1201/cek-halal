<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function index()
    {
        $products = Product::latest();

        if (request('search')) {
            $products->where('name', 'like', '%' . request('search') . '%');
        }
        return view('app.search-products', [
            "products" => $products->get()
        ]);
    }
}
