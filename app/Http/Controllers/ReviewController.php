<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::with('product.company')->latest()->searching(request(['search']))->get();
        return view('dashboard.view-data.reviews-data', ['reviews' => $reviews]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::where('is_halal', '=', 'false')->get();
        return view('dashboard.add-review', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validateReview = $request->validate([
            'product_id' => 'required',
            'name' => 'required',
            'user_id' => 'required',
            'content' => 'required',
            'url_source' => 'required',
            'image' => 'required|image|file|max:1024|mimes:jpeg,png,jpg',
        ]);

        if ($request->file('image') && $request->has('name')) {
            $validateReview['image'] = $request->file('image')->store('review-images');
            $validateReview['name'] = $request->input('name');
        }

        Review::create($validateReview);

        return redirect()->route('reviews.index')->with('pesan', 'Review Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        // return view('app.review-detail', ['review' => $review]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        return view('dashboard.edit-review', ['review' => $review]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        $validateReview = $request->validate([
            'name' => 'required',
            'user_id' => 'required',
            'content' => 'required',
            'url_source' => 'required',
            'image' => 'image|file|max:1024|mimes:jpeg,png,jpg',
        ]);

        if ($request->has('name')) {
            $validateReview['name'] = $request->input('name');
        }
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateReview['image'] = $request->file('image')->store('review-images');
        }

        Review::where('id', $review->id)
            ->update($validateReview);

        return redirect()->route('reviews.index')->with('pesan', 'Review Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        if ($review->image) {
            Storage::delete($review->image);
        }
        Review::destroy($review->id);
        return redirect()->route('reviews.index')->with('pesan', 'Preview Berhasil Dihapus');
    }
}
