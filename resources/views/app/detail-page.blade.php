@extends('layouts.layout')

@section('doc_title')
<title>Search Halal Products</title>
@endsection

@section('header')
@include('layouts.header', ['title' => "Deskripsi Produk", 'path' => "/product-list"])
@endsection


@section('content')
<div class="mt-14 mb-12 w-11/12">
    <div id="product-detail" class="flex content-center justify-between mx-2">
        <img class="rounded-lg flex-auto min-w-0 max-h-36 object-scale-down" src="{{ asset('src/img/test-image.png') }}"
            alt="food">
        <div id="product-desc" class="flex-auto ml-5 -mt-1">
            <div>
                <h1 class="font-bold text-xl font-primary">{{$product->name}}</h1>
                <h2 class="text-gray-secondary font-medium font-primary text-sm">{{$product->company->name}}</h2>
            </div>
            <div class="rounded-lg border border-primary-100 p-2 mt-2.5">
                <h3 class="text-xs italic text-primary-100">Nomer Sertifikat : {{$product->certification_number}}</h3>
                <h3 class="text-xs italic text-primary-100">Expired Date : {{$product->expire_date}}</h3>
            </div>
            <button class="label px-3 py-1 mt-3 text-lg w-full bg-primary-200 text-primary-100" disabled="disabled">
                Tersertifikasi Halal
            </button>
        </div>
    </div>
    <div id="composition">
        <div class="mt-8 mx-2">
            <div class="rounded-lg border border-primary-100">
                <div class="h-12 bg-primary-100 text-center rounded-t-lg">
                    <h3 class="text-white font-medium py-2.5">Komposisi</h3>
                </div>
                <div class="p-4">
                    <p class="text-sm text-justify">
                        {{$product->ingredients}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
