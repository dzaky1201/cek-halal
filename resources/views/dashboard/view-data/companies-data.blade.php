@extends('layouts.layout')

@section('doc_title')
<title>Data Perusahaan</title>
@endsection

@section('header')
@include('layouts.header', ['title' => "Data Perusahaan", 'path' => "/dashboard"])
@endsection

@section('content')
<div class="mt-10 mb-10 w-11/12 relative">
    {{-- import search bar --}}
    @include('layouts.search-bar', ['placeholder' => "Cari Perusahaan"])
    <div id="company-data" class="mt-10">
        @foreach ($companies as $company)
        {{-- company card --}}
        <div
            class="flex justify-between bg-gray-primary items-center p-3 font-medium text-sm font-primary text-medium rounded-lg mb-4">
            <p>{{$company->name}}</p>
            {{-- edit icon --}}
            <a href="{{route('companies.edit', ['company'=>$company->id])}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#000">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                </svg>
            </a>
        </div>
        @endforeach

    </div>
</div>
{{-- bottom nav --}}
<div class="w-full h-20 text-center bg-white shadow-bottomNav overflow-hidden sticky bottom-0 pt-7">
    <a href="{{route('companies.create')}}" class="btn font-medium hover:shadow-xl">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline mb-1 mr-1 ml-5" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span class="pr-6">Tambah Perusahaan</span>
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
