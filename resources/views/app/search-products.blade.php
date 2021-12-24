@extends('layouts.layout')

@section('doc_title')
<title>Search Halal Products</title>
@endsection

@section('header')
<<<<<<< HEAD
  @include('layouts.header', ['title' => "Cek Halal", 'path' => "/home"])
=======
@include('layouts.header', ['title' => "Cek Halal", 'path' => "/"])
>>>>>>> master
@endsection

@section('content')
<div class="mt-10 mb-12 w-11/12">
    <div id="search-container">
        <form class="mx-1 flex items-center" action="/product-list">
            <input class="form-input border-2 font-primary text-sm h-12 mr-4" type="text" name="search" id="search"
                placeholder="Masukkan nama produk" value="{{request('search')}}" required>
            <button class="btn w-32 mx-auto flex items-center justify-center font-primary font-medium" type="submit">
                Cari
                {{-- search icon --}}
                <span class="ml-2">
                    <svg width="20" height="20" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M41.3333 37.3333H39.2267L38.48 36.6133C41.0933 33.5733 42.6667 29.6267 42.6667 25.3333C42.6667 15.76 34.9067 8 25.3333 8C15.76 8 8 15.76 8 25.3333C8 34.9067 15.76 42.6667 25.3333 42.6667C29.6267 42.6667 33.5733 41.0933 36.6133 38.48L37.3333 39.2267V41.3333L50.6667 54.64L54.64 50.6667L41.3333 37.3333ZM25.3333 37.3333C18.6933 37.3333 13.3333 31.9733 13.3333 25.3333C13.3333 18.6933 18.6933 13.3333 25.3333 13.3333C31.9733 13.3333 37.3333 18.6933 37.3333 25.3333C37.3333 31.9733 31.9733 37.3333 25.3333 37.3333Z"
                            fill="#fff" />
                    </svg>
                </span>
            </button>
        </form>
    </div>
    <div id="filter" class="flex justify-between mt-6 mx-1.5">

        <form action="/product-list">
            <button class="filterBtn py-2 px-4 bg-primary-100">
                <svg class="inline" width="20" height="20" viewBox="0 0 64 64" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18.6664 16.0003H45.333L31.973 32.8003L18.6664 16.0003ZM11.333 14.9603C16.7197 21.867 26.6664 34.667 26.6664 34.667V50.667C26.6664 52.1337 27.8664 53.3337 29.333 53.3337H34.6664C36.133 53.3337 37.333 52.1337 37.333 50.667V34.667C37.333 34.667 47.253 21.867 52.6397 14.9603C53.9997 13.2003 52.7464 10.667 50.533 10.667H13.4397C11.2264 10.667 9.97303 13.2003 11.333 14.9603Z"
                        fill="#fff" />
                </svg>
                Semua
            </button>
            <input type="hidden" id="all" name="all" value="true">
        </form>
        <form action="/product-list">
            <button class="filterBtn py-2 px-4 bg-gray-secondary">
                Tersertifikasi Halal
            </button>
            <input type="hidden" id="is_halal" name="is_halal" value="true">
        </form>

        <form action="/product-list">
            <button class="filterBtn py-2 px-4 bg-gray-secondary">
                Belum Tersertifikasi
            </button>
            <input type="hidden" id="is_halal" name="is_halal" value="false">
        </form>
    </div>

    @if ($products->count())
    <h2 class="ml-2 mt-6">{{count($products)}} Produk ditemukan</h2>
    <div id="search-result">
        @foreach ($products as $item)
        <div class="product">
            <a href="{{route('product-list.show', ['product' => $item->id])}}">
                <div class="card flex px-3 py-2.5 mt-4 mb-3 bg-gray-100 h-28 rounded-lg shadow-md">
                    {{-- Using image placeholder to set image width --}}
                    {{-- <img class="rounded-lg w-24 object-scale-down" src="{{asset('storage/'.$item->image)}}"
                        alt="{{$item->name}}"> --}}
                    <img class="rounded-lg w-24 object-scale-down" src="{{asset('src/img/test-image.png')}}"
                        alt="{{$item->name}}">
                    <div class="ml-3 truncate">
                        <h3 class="font-bold font-primary truncate ...">{{$item->name}}</h3>
                        <h4 class="mt-1.5 truncate font-primary font-medium text-sm tracking-wide ...">
                            {{$item->company->name}}</h4>
                        @if ($item->is_halal === 'true')
                        <p class="label py-1 px-3 mt-2 w-min bg-primary-200 text-primary-100">
                            Tersertifikasi Halal
                        </p>
                        @else
                        <p class="label py-1 px-3 mt-2 w-min bg-gray-secondary text-black_ori">
                            Belum Tersertifikasi Halal
                        </p>
                        @endif
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        @else
        <h2 class="ml-2 mt-6 font-semibold font-primary">{{count($products)}} Produk ditemukan</h2>
        <div class="w-8/12 mt-20 m-auto text-center">
            <img class="m-auto w-100 bg-cover" src="{{asset('src/illustrations/not-found.png')}}"
                alt="Product not found">
            <h3 class="mt-6 font-semibold font-primary text-sm">
                Mohon maaf, produk yang anda cari belum tersedia.
            </h3>
        </div>
<<<<<<< HEAD
    @endforeach
    </div>
</div>
    @section('scripts')
        <script src="{{ asset('js/functions.js') }}"></script>
    @endsection
=======
        @endif
    </div>
</div>
@section('scripts')
<script src="{{ asset('js/functions.js') }}"></script>
@endsection
>>>>>>> master
@endsection
