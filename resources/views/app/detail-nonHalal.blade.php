@extends('layouts.layout')

@section('doc_title')
<title>Cek Halal: {{$product->name}}</title>
@endsection

@section('header')
@include('layouts.header', ['title' => "Deskripsi Produk", 'path' => "/product-list"])
@endsection


@section('content')
<div class="mb-12 w-full xs:mt-14 xs:w-11/12">
    <div id="product-detail" class="
         w-full flex flex-col content-center
         xs:justify-between xs:px-2 xs:flex-row">
        <img class="
            min-w-0 max-h-fit object-scale-down
            xs:rounded-lg xs:flex-auto xs:max-h-52" src="{{asset('storage/'.$product->image)}}" alt="food">
        <div id="product-desc" class="
             w-11/12 mx-auto mt-6 text-center px-1.5
             xs:flex-auto xs:ml-5 xs:-mt-1 xs:px-0 xs:pt-3 xs:w-3/4">
            <div class="text-left">
                <h1 class="font-bold text-xl font-primary">{{$product->name}}</h1>
                <h2 class="text-gray-secondary font-medium font-primary text-sm mt-2 xs:mt-0">
                    {{$product->company->name}}
                </h2>
            </div>
            <div class="rounded-lg border border-primary-100 p-2 mt-2.5 text-left">
                <h3 class="text-xs italic text-primary-100">Nomer Sertifikat : -</h3>
                <h3 class="text-xs italic text-primary-100">Expired Date : -</h3>
            </div>
            <button class="label px-4 py-1 text-sm mx-auto bg-gray-secondary text-black_ori
                        mt-7 xs:mt-3 xs:w-full" disabled="disabled">
                Belum Tersertifikasi
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
        <hr class="mt-6 border-t-1 border-gray-secondary mx-4 xs:mx-3">
    </div>
    <div id="Review" class="mx-3 xs:mx-2">
        <h3 class="text-gray-secondary font-bold text-sm mx-2 mt-3 xs:mx-1">
            Ulasan Komunitas:
        </h3>

        @foreach ($detail as $item)
        <div class="mt-4 mx-2 xs:mx-0">
            <div class="rounded-lg border border-primary-100">
                <div class="p-3">
                    <h3 class="text-lg font-semibold mb-2">{{$item->name}}</h3>
                    <p class="text-sm text-justify mb-2 font-primary font-medium">
                        {{$item->content}}
                    </p>
                    <a href="{{route('product-list.showReview',['review'=>$item->id])}}"
                        class="font-primary text-primary-100 font-bold text-sm">
                        Lihat lebih lanjut
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline ml-2" fill="none"
                            viewBox="0 0 24 24" stroke="#209777">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <p class="italic font-primary mt-2.5 text-xs">
                        Sumber: {{$item->url_source}}
                    </p>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</div>
@endsection
