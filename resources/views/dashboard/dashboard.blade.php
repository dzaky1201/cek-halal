@extends('layouts.admin-layout')

@section('doc_title')
<title>Dashboard Super Admin</title>
@endsection


@section('content')
<header class="w-full bg-bg_large relative">
    <nav class="header max-w-mobile mx-auto flex justify-between items-center">
        <h1 class="text-lg -mr-6">Dashboard Admin</h1>
        <div class="flex">
            <img class="mx-auto" src="{{ asset('/src/icons/Profile.svg') }}" alt="logout">
            <div class="ml-1">
                <h3 class="text-sm">{{Auth::user()->name}}</h3>
                <h4 class="text-xs">{{Auth::user()->role}}</h4>
            </div>
        </div>
    </nav>
</header>

<div id="menu-wrapper" class="mt-24 mx-auto mb-10">
    <div class="grid grid-cols-2 gap-10">
        <a class="font-medium text-xs text-white text-center" href="{{route('products.create')}}">
            <div class="box rounded-lg flex-col p-2">
                <img class="w-12 h-12 block mb-3" src="{{ asset('/src/icons/package.svg') }}" alt="Add Product">

                Tambah Produk

            </div>
        </a>
        <a class="font-medium text-xs text-white text-center" href="{{route('companies.create')}}">
            <div class="box rounded-lg flex-col p-2">
                <img class="w-12 h-12 block mb-2" src="{{ asset('/src/icons/company.svg') }}" alt="Add company">

                Tambah Perusahaan

            </div>
        </a>
        <a class="font-medium text-xs text-white text-center" href="{{route('reviews.create')}}">
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

    </div>
    <form action="/logout" method="POST">
        @csrf
        <button
            class="p-2 mb-4 w-full bg-lavender_rose text-white rounded-xl text-center cursor-pointer hover:shadow-md mt-32"
            type="submit" name="submit">
            Logout
        </button>
    </form>
</div>
@if (session()->has('pesan'))
<div id="modal"
    class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center bg-black bg-opacity-50 transform scale-0 transition-transform duration-300 scale-100">
    <!-- Modal content -->
    <div class="bg-white w-64 h-42 border-2 rounded-lg border-primary-100">
        <header class="header rounded-tr-lg rounded-tl-lg"></header>
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
<script src="{{ asset('js/functions.js') }}"></script>
@endsection
@endsection
