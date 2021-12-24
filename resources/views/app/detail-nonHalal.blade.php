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
        <img class="rounded-lg flex-auto min-w-0 max-h-36 object-scale-down" src="{{ asset('src/img/noodle.png') }}"
            alt="food">
        <div id="product-desc" class="flex-auto ml-5 -mt-1">
            <div>
                <h1 class="font-bold text-xl font-primary">{{$product->name}}</h1>
                <h2 class="text-gray-secondary font-medium font-primary text-sm">{{$product->company->name}}</h2>
            </div>
            <div class="rounded-lg border border-primary-100 p-2 mt-2.5">
                <h3 class="text-xs italic text-primary-100">Nomer Sertifikat : -</h3>
                <h3 class="text-xs italic text-primary-100">Expired Date : -</h3>
            </div>
            <button class="label px-3 py-1 mt-3 text-lg w-full bg-gray-secondary text-black_ori" disabled="disabled">
                Belum Tersertifikasi
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
        <hr class="mt-6 border-t-1 border-gray-secondary mx-2">
    </div>
    <div id="Review">
        <h3 class="text-gray-secondary font-bold text-sm mx-2 mt-3">
            Ulasan Komunitas:
        </h3>


        <div class="mt-4 mx-2">
            <div class="rounded-lg border border-primary-100">
                <div class="p-3">
                    <h3 class="text-lg font-semibold mb-2">Udin Sedunia</h3>
                    <p class="text-sm text-justify mb-2 font-primary font-medium">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus ullam incidunt beatae
                        quidem similique molestiae reiciendis itaque.
                    </p>
                    <a href="/search" class="font-primary text-primary-100 font-bold text-sm">
                        Lihat lebih lanjut
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline ml-2" fill="none"
                            viewBox="0 0 24 24" stroke="#209777">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <p class="italic font-primary mt-2.5 text-xs">
                        Sumber: Halal.com/halalalaan toyyibann
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
