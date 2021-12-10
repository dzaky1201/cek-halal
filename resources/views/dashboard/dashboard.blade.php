@extends('layouts.admin-layout')

@section('doc_title')
<title>Dashboard Super Admin</title>
@endsection

@section('content')
<header class="w-full bg-bg_large relative">
    <nav class="header max-w-mobile mx-auto flex justify-between items-center">
        <a href="@yield('path', '/')">
            <svg width="32" height="30" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M46.6933 10.3201L41.9466 5.6001L15.5733 32.0001L41.9733 58.4001L46.6933 53.6801L25.0133 32.0001L46.6933 10.3201Z"
                    fill="#fff" />
            </svg>
        </a>
        <h1 class="text-lg -mr-6">Dashboard Admin</h1>

        <div id="dropdown" class="text-center relative">
            <button onclick="toggleLogout()" id="logout" class="cursor-pointer">
                <img class="mx-auto" src="{{ asset('/src/icons/Profile.svg') }}" alt="logout">
                <h3>{{Auth::user()->name}}</h3>
            </button>
        </div>
    </nav>
</header>

<div id="menu-wrapper" class="m-auto lg:mt-24 mx-auto">
    <div class="grid grid-cols-2 gap-10">
        <a class="font-medium text-xs text-white text-center">
            <div class="box rounded-lg flex-col p-2">
                <img class="w-12 h-12 block mb-3" src="{{ asset('/src/icons/package.svg') }}" alt="Add Product">

                Tambah Produk

            </div>
        </a>
        <a class="font-medium text-xs text-white text-center">
            <div class="box rounded-lg flex-col p-2">
                <img class="w-12 h-12 block mb-2" src="{{ asset('/src/icons/company.svg') }}" alt="Add company">

                Tambah Perusahaan

            </div>
        </a>
        <a class="font-medium text-xs text-white text-center" href="#">
            <div class="box rounded-lg flex-col p-2">
                <img class="w-12 h-12 block mb-3" src="{{ asset('/src/icons/clipboard.svg') }}" alt="Add Review">
                Tambah Ulasan
            </div>
        </a>
        <a class="font-medium text-xs text-white text-center" href="/register">
            <div class="box rounded-lg flex-col p-2">
                <img class="w-12 h-12 block mb-3" src="{{ asset('/src/icons/user.svg') }}" alt="User logo">

                Tambah Admin

            </div>
        </a>

        <form action="/logout" method="POST">
            @csrf
            <button type="submit">logout</button>
        </form>
    </div>
</div>
@section('scripts')
<script src="{{ asset('js/functions.js') }}"></script>
@endsection
@endsection
