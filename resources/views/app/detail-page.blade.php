@extends('layouts.layout')

@section('doc_title')
<title>Cek Halal: {{$product->name}}</title>
@endsection

@section('header')
@include('layouts.header', ['title' => "Deskripsi Produk", 'path' => "/product-list"])
@endsection


@section('content')
<div class="mb-12 w-full xs:mt-14 xs:w-11/12">
    <div id="product-detail" 
         class="
         w-full flex flex-col content-center
         xs:justify-between xs:px-2 xs:flex-row">
        <img class="
            min-w-0 max-h-fit object-scale-down
            xs:rounded-lg xs:flex-auto xs:max-h-48" 
            src="{{ asset('src/img/noodle-soup.jpg') }}"
            alt="food">
        <div id="product-desc" 
             class="
             w-11/12 mx-auto mt-6 text-center px-1.5
             xs:flex-auto xs:ml-5 xs:-mt-1 xs:px-0">
            <div class="text-left">
                <h1 class="font-bold text-xl font-primary">{{$product->name}}</h1>
                <h2 class="text-gray-secondary font-medium font-primary text-sm mt-2 xs:mt-0">
                    {{$product->company->name}}
                </h2>
            </div>
            <div class="rounded-lg border border-primary-100 p-2 mt-2.5 text-left">
                <h3 class="text-xs italic text-primary-100">Nomer Sertifikat : {{$product->certification_number}}</h3>
                <h3 class="text-xs italic text-primary-100">Expired Date : {{$product->expire_date}}</h3>
            </div>
            <button 
                class="label px-4 py-1 text-sm mx-auto bg-primary-200 text-primary-100
                        mt-7 xs:mt-3 xs:w-full" 
                disabled="disabled">
                Tersertifikasi Halal
            </button>
        </div>
    </div>
    <div id="composition">
        <div class="mt-8 w-11/12 mx-auto px-1.5 xs:w-full">
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
