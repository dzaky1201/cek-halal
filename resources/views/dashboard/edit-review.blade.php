@extends('layouts.admin-layout')

@section('doc_title')
<title>Tambah Ulasan</title>
@endsection

@section('header')
@include('layouts.header', ['title' => "Edit Ulasan Produk", 'path' => "/dashboard/reviews"])
@endsection

@section('content')
<div id="review-form" class="mt-10 mb-12 w-11/12">
    <form class="mx-2" action="{{route('reviews.update', ['review'=>$review->id])}}" method="POST"
        enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="mt-4">
            <label class="font-medium tracking-wider" for="product_id">Nama Produk</label>
            <input class="mt-1 form-input" type="text" name="product_id" id="product_id"
                value="{{$review->product->name}}" readonly>
        </div>
        <div class="mt-4">
            <label class="font-medium tracking-wider" for="name">nama pengulas</label>
            <input class="mt-1 form-input" type="text" name="name" id="name" placeholder="Masukkan URL sumber" required
                value="{{old('name') ?? $review->name}}">
        </div>
        <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
        <div class="mt-4 pr-1">
            <label class="font-medium tracking-wider mb-2" for="content">Ulasan</label>
            <textarea id="review" class="mt-1 form-input resize-x" name="content" rows="6" cols="30"
                placeholder="Masukkan Ulasan">{{old('content') ?? $review->content}}</textarea>
        </div>
        <div class="mt-4">
            <label class="font-medium tracking-wider" for="url_source">Sumber</label>
            <input class="mt-1 form-input" type="text" name="url_source" id="url_source"
                placeholder="Masukkan URL sumber" value="{{old('url_source') ?? $review->url_source}}" required>
        </div>
        <div class="mt-4">
            <label class="font-medium tracking-wider" for="image">Foto sumber</label>
            <input type="hidden" name="oldImage" value="{{$review->image}}">
            <input class="mt-1 form-input border-dashed" type="file" name="image" id="image"
                placeholder="Masukkan Foto sumber">
        </div>
        <button class="btn w-full mt-32" type="submit" name="submit">Edit Ulasan</button>
    </form>
</div>
@endsection
