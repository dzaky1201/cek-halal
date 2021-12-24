@extends('layouts.admin-layout')

@section('doc_title')
<title>Tambah Berhasil</title>
@endsection

@section('content')
<header class="w-full bg-bg_large relative">
    <nav class="header max-w-mobile mx-auto flex justify-center items-center">
        <h1 class="text-lg -mr-6">Tambah Data Berhasil</h1>
    </nav>
</header>

<div class="mx-auto mt-36 w-10/12 ">
    <div class="flex mb-32 flex-col text-center text-sm w-4/5 mx-auto">
        <img class="mx-auto w-40 h-40" src="{{ asset('/src/illustrations/char1.svg') }}"" alt=" people gesturing
            gratitude">
        <p class="mt-5">
            Jazakumullahu khairan, data dan informasi telah berhasil ditambahkan, semoga dapat berguna bagi kita semua!
            <span>
                <a class="text-primary-100 font-medium" href="{{route('products.index')}}">Tambahkan data lainnya<a>
            </span>
        </p>
    </div>
    <a class="block btn mb-12" href="/dashboard">Kembali ke halaman admin</a>
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
