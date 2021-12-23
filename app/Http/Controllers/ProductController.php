<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('dashboard.view-data.products-data', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        return view('dashboard.add-product', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validateProduct = $request->validate([
            'name' => 'required',
            'user_id' => 'required',
            'company_id' => 'required',
            'is_halal' => 'required',
            'ingredients' => 'required',
            'image' => 'required|image|file|max:1024|mimes:jpeg,png,jpg',
        ]);

        if ($request->file('image')) {
            $validateProduct['image'] = $request->file('image')->store('product-images');
        }

        Product::create($validateProduct);


        return redirect('success')->with('pesan', 'Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $companies = Company::all();
        return view('dashboard.edit-product', ['product' => $product, 'companies' => $companies]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect('dashboard.products')->with('pesan', 'Produk Berhasil Dihapus');
    }
}
