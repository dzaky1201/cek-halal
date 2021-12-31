@extends('layouts.layout')

@section('doc_title')
<title>Search Halal Products</title>
@endsection

@section('header')
  @include('layouts.header', ['title' => "Cek Halal", 'path' => "/home"])
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
    <div id="filter" class="w-11/12 mt-6">
      <h1 class="inline ml-2">Pilih Kategori: </h1>
      <div id="dropdown" 
           class="relative inline ml-2 bg-white font-primary text-black_ori cursor-pointer">
          <button onclick="showFilter()" 
                  class="inline-flex justify-between border rounded-md p-2 border-primary-100 font-primary 
                         w-3/6 text-left text-primary-100 bg-white">
            Filter
            <svg id="arrow" xmlns="http://www.w3.org/2000/svg" 
                 class="h-6 w-6 inline-block transform duration-200" 
                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div id="dropdown-content" 
               class="hidden absolute bg-white overflow-auto w-44 border-black z-10 left-0 shadow-xl
                      xs:w-48">
            <form action="/product-list">
              <button 
                class="font-primary text-left p-3 w-full no-underline block text-black_ori hover:bg-gray-300">
                Semua
            </button>
              <input type="hidden" id="all" name="all" value="true">
            </form>
            <form action="/product-list">
              <button 
                class="font-primary text-left p-3 w-full no-underline block text-black_ori hover:bg-gray-300">
                Tersertifikasi Halal
            </button>
              <input type="hidden" id="is_halal" name="is_halal" value="true">
            </form>
            <form action="/product-list">
              <button 
                class="font-primary text-left p-3 w-full no-underline block text-black_ori hover:bg-gray-300">
                Belum Tersertifikasi
            </button>
              <input type="hidden" id="is_halal" name="is_halal" value="false">
            </form>
          </div>
        </div>
     </div>

    @if ($products->count())
    <h2 class="ml-2 mt-6 font-bold tracking-wide">{{count($products)}} Produk ditemukan</h2>
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
                        <p class="
                            label text-xs py-1 px-1.5 mt-3 w-min bg-primary-200 text-primary-100 
                            xs:text-sm xs:px-3 xs:mt-2">
                            Tersertifikasi Halal
                        </p>
                        @else
                        <p class="
                            label text-xs py-1 px-1.5 mt-3 w-min bg-gray-secondary text-black_ori 
                            xs:text-sm xs:px-3 xs:mt-2">
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
        @endif
    </div>
</div>
@section('scripts')
<script src="{{ asset('js/functions.js') }}"></script>
<script>
  function showFilter() {
  document.getElementById("dropdown-content").classList.toggle("hidden");
  document.getElementById("arrow").classList.toggle("rotate-180");
}
</script>
@endsection
@endsection
