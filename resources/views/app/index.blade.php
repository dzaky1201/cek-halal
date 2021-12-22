@extends('layouts.layout')

@section('doc_title')
<title>Cek Halal Homepage</title>
@endsection

@section('meta-tag')
    <meta name="description" 
          content="Cek halal adalah aplikasi berbasis web untuk melakukan pencarian produk halal
                   di Indonesia. Data yang didapatkan berasal dari situs resmi MUI.">
    <meta name="robots" content="index, follow" />
@endsection

@section('header_link')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endsection

@section('header')
<header class="w-full bg-bg_large ">
    <nav class="header max-w-mobile mx-auto flex justify-center items-center">
        <h1 class="text-xl font-semibold font-primary">Cek Halal</h1>
    </nav>
</header>
@endsection

@section('content')
<div id="search-main" class="w-11/12 mb-36">
    <img class="mx-auto mt-14" src="https://picsum.photos/id/1068/121" alt="Logo">
    <div class="mt-10">
        <form class="mx-1 flex flex-col justify-center" action="/product-list">
            <input class="mt-2 form-input w-full border-2 font-primary text-sm" type="text" name="search" id="search"
                placeholder="Masukkan nama produk" required value="{{request('search')}}">
            <button class="btn w-40 mt-8 mx-auto flex items-center justify-center font-medium" type="submit">
                Cari
                {{-- search icon --}}
                <span class="ml-2">
                    <svg width="18" height="18" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M41.3333 37.3333H39.2267L38.48 36.6133C41.0933 33.5733 42.6667 29.6267 42.6667 25.3333C42.6667 15.76 34.9067 8 25.3333 8C15.76 8 8 15.76 8 25.3333C8 34.9067 15.76 42.6667 25.3333 42.6667C29.6267 42.6667 33.5733 41.0933 36.6133 38.48L37.3333 39.2267V41.3333L50.6667 54.64L54.64 50.6667L41.3333 37.3333ZM25.3333 37.3333C18.6933 37.3333 13.3333 31.9733 13.3333 25.3333C13.3333 18.6933 18.6933 13.3333 25.3333 13.3333C31.9733 13.3333 37.3333 18.6933 37.3333 25.3333C37.3333 31.9733 31.9733 37.3333 25.3333 37.3333Z"
                            fill="#fff" />
                    </svg>
                </span>
            </button>
        </form>
    </div>
    <hr class="mt-6 border-t-2 border-gray-secondary">
    {{-- Slider using swiper.js --}}
    <div class="swiper halal-slider mt-8">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="rounded-lg object-cover w-full h-56" src="{{ asset('/src/img/slider1-fruit.jpg') }}"
                    alt="image" />
                <div class="container relative">
                    <div class="slider_caption px-7 absolute bottom-14 ">
                        "Apa yang dihalalkan oleh Allah dalam Kitab-Nya adalah halal dan apa yang diharamkan Allah di
                        dalam Kitab-Nya adalah haram, dan apa yang didiamkan (tidak diterangkan), maka barang itu
                        termasuk yang dimaafkan.” (HR. Ibnu Majah dan Turmudzi)
                    </div>
                    <p class="px-7 absolute bottom-8 slider_attribution">
                        Photo by Jimmy Dean via Unsplash
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <img class="rounded-lg object-cover w-full h-56" src="{{ asset('/src/img/slider2-seller.jpg') }}"
                    alt="image" />
                <div class="container relative">
                    <div class="slider_caption px-7 absolute bottom-14">
                        "Halal tidaknya sebuah produk tidak ditentukan oleh penjualnya memakai kerudung atau tidak.”
                        (Tim Cek Halal App)
                    </div>
                    <p class="px-7 absolute bottom-8 slider_attribution">
                        Photo by Devi Puspita Amartha Yahya via Unsplash
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <img class="rounded-lg object-cover w-full h-56" src="{{ asset('/src/img/slider3-shelves.jpg') }}"
                    alt="image" />
                <div class="container relative">
                    <div class="slider_caption px-7 absolute bottom-14">
                        “Setiap tubuh yang tumbuh dari (makanan) yang haram, maka api neraka lebih utama baginya (lebih
                        layak membakarnya).”
                        (HR. At-Thabrani).
                    </div>
                    <p class="px-7 absolute bottom-8 slider_attribution">
                        Photo by Franki Chamaki via Unsplash
                    </p>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>


@section('scripts')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.halal-slider', {
     // Disable preloading of all images
    preloadImages: false,
    // Enable lazy loading
    lazy: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      keyboard: true,
    });
</script>
@endsection
@endsection
