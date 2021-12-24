@extends('layouts.admin-layout')

@section('doc_title')
<title>Tambah Ulasan</title>
@endsection

@section('header')
@include('layouts.header', ['title' => "Tambah Ulasan Produk"])
@endsection

@section('content')
<div id="review-form" class="mt-10 mb-12 w-11/12">
    <form class="mx-2" action="{{route('reviews.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mt-4">
            <label class="font-medium tracking-wider" for="product_id">Nama Produk:</label>
            <select class="mt-1 form-input font-primary font-medium" name="product_id" id="product_id">
                <option value="N/A" d>--Select food--</option>
                @foreach ($products as $product)
                <option value="{{$product->id}}">{{$product->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-4">
            <label class="font-medium tracking-wider" for="name">nama pengulas</label>
            <input class="mt-1 form-input" type="text" name="name" id="name" placeholder="Masukkan URL sumber" required>
        </div>
        <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
        <div class="mt-4 pr-1">
            <label class="font-medium tracking-wider mb-2" for="content">Ulasan</label>
            <textarea id="review" class="mt-1 form-input resize-x" name="content" rows="6" cols="30"
                placeholder="Masukkan Ulasan"></textarea>
        </div>
        <div class="mt-4">
            <label class="font-medium tracking-wider" for="url_source">Sumber</label>
            <input class="mt-1 form-input" type="text" name="url_source" id="url_source"
                placeholder="Masukkan URL sumber" required>
        </div>
        <div class="mt-4">
            <label class="font-medium tracking-wider" for="image">Foto sumber</label>
            <input class="mt-1 form-input border-dashed" type="file" name="image" id="image" 7
                placeholder="Masukkan Foto sumber" required>
        </div>
        <button class="btn w-full mt-32" type="submit" name="submit">Tambahkan Ulasan</button>
    </form>
</div>
@endsection
