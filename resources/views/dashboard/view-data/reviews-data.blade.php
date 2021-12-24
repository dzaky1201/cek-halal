@extends('layouts.layout')

@section('doc_title')
<title>Data Ulasan</title>
@endsection

@section('header')
@include('layouts.header', ['title' => "Data Ulasan", 'path' => "/dashboard"])
@endsection

@section('content')
<div class="mt-10 mb-10 w-11/12 relative">
    {{-- import search bar --}}
    @include('layouts.search-bar', ['placeholder' => "Cari Ulasan"])
    <div id="search-result">

        {{-- review card component --}}
        @foreach ($reviews as $review)
        <div class="review-card">
            <div class="mt-8 mx-2 bg-gray-100 rounded-br-lg rounded-bl-lg">
                {{-- review header --}}
                <div id="review-header" class="rounded-lg">
                    <div id="review-header-container"
                        class="h-12 bg-primary-100 flex justify-between content-center rounded-t-lg pr-2 pl-4">
                        <h3 class="text-white font-medium pt-3">{{$review->name}}</h3>
                        <div class="flex content-center items-center justify-between ml-2">
                            {{-- edit icon --}}
                            <a href="{{ route('reviews.edit',['review' => $review->id]) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-1.5" fill="none"
                                    viewBox="0 0 24 24" stroke="#FFFFFF">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </a>

                            {{-- delete icon --}}
                            <form action="{{route('reviews.destroy', ['review'=>$review->id])}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-1.5" fill="none"
                                        viewBox="0 0 24 24" stroke="#FFFFFF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    {{-- review content --}}
                    {{-- product desc --}}
                    <div class="flex px-4 pt-3 h-20 rounded-lg items-center">
                        <img class="rounded-lg h-12 w-12" src="{{ asset('src/img/noodle.png') }}" alt="food">
                        <div class="ml-3 truncate items-center">
                            <div>
                                <h3 class="font-bold font-primary my-1 text-sm">{{$review->product->name}}</h3>
                                <h4 class="truncate ... text-gray-secondary text-sm">
                                    {{$review->product->company->name}}
                                </h4>
                            </div>
                        </div>
                    </div>
                    {{-- review --}}
                    <div class="p-4 pt-0  ">
                        <p class="text-sm text-justify line-clamp-4">
                            {{$review->content}}
                        </p>
                        <p class="text-xs text-primary-100 mt-3">
                            Sumber:
                            <span>
                                <a href="halal.com/infohalal" class="underline">
                                    {{$review->url_source}}
                                </a>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</div>
{{-- bottom nav --}}
<div class="w-full h-20 text-center bg-white shadow-bottomNav overflow-hidden sticky bottom-0 pt-7">
    <a class="btn font-medium hover:shadow-xl" href="{{route('reviews.create')}}">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline mb-1 mr-1 ml-5" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span class="pr-6">Tambah Ulasan</span>
    </a>
</div>

@if (session()->has('pesan'))
<div id="modal"
    class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center bg-black bg-opacity-50 transform scale-0 transition-transform duration-300 scale-100">
    <!-- Modal content -->
    <div class="bg-white w-64 h-42 border-2 rounded-lg border-primary-100">
        <header class="header p-4 rounded-tr-lg rounded-tl-lg"></header>
        <div class="flex flex-col p-3 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="#209777">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd" />
            </svg>
            <h1 class="text-center text-lg font-medium mt-2">{{session('pesan')}}</h1>
            <button id="closebutton" type="button"
                class="bg-primary-100 rounded-xl text-white text-center cursor-pointer hover:shadow-md px-4 py-3 mb-2 mt-6 focus:outline-none">
                Tutup
            </button>
        </div>
    </div>
</div>
@endif
@section('scripts')
<script src="{{ asset('js/modal.js') }}"></script>
@endsection

@endsection
