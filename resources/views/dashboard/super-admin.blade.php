@extends('layouts.admin-layout')

@section('doc_title')
  <title>Dashboard Super Admin</title>
@endsection

@section('content')
    <header class="w-full bg-bg_large relative">
      <nav class="header max-w-mobile mx-auto flex justify-between items-center">
        <a href="@yield('path', '/admin')">
          <svg width="32" height="30" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M46.6933 10.3201L41.9466 5.6001L15.5733 32.0001L41.9733 58.4001L46.6933 53.6801L25.0133 32.0001L46.6933 10.3201Z"
              fill="#fff"/>
          </svg>
        </a>
        <h1 class="text-lg -mr-6">Dashboard Admin</h1>

        <div id="dropdown" class="text-center relative">
          <button onclick="toggleLogout()" id="logout" class="cursor-pointer">
            <img class="mx-auto" src="{{ asset('/src/icons/Profile.svg') }}" alt="logout">
            <h3>Fulanah</h3>
          </button>
          <div id="dropdown-content" class="absolute hidden bg-gray-200 overflow-auto w-32 z-10 top-20 -right-6">
            <a class="block p-3 mx-auto no-underline text-black" href="/">
              <img class="w-5 h-5 inline" src="{{ asset('/src/icons/Logout.svg') }}" alt="Logout">
              Logout
            </a>
          </div>
        </div>
      </nav>
    </header>

    <div id="menu-wrapper" class="m-auto lg:mt-24 mx-auto">
      <div class="grid grid-cols-2 gap-10">
        <div class="box rounded-lg flex-col p-2">
          <img class="w-12 h-12 block mb-3" src="{{ asset('/src/icons/package.svg') }}" alt="Add Product">
          <a class="font-medium text-xs text-white text-center">
            Tambah Produk
          </a>
        </div>
        <div class="box rounded-lg flex-col p-2">
          <img class="w-12 h-12 block mb-2" src="{{ asset('/src/icons/company.svg') }}" alt="Add company">
          <a class="font-medium text-xs text-white text-center">
            Tambah Perusahaan
          </a>
        </div>
        <div class="box rounded-lg flex-col p-2">
          <img class="w-12 h-12 block mb-3" src="{{ asset('/src/icons/clipboard.svg') }}" alt="Add Review">
          <a class="font-medium text-xs text-white text-center">
            Tambah Ulasan
          </a>
        </div>
        <div class="box rounded-lg flex-col p-2">
          <img class="w-12 h-12 block mb-3" src="{{ asset('/src/icons/user.svg') }}" alt="User logo">
          <a class="font-medium text-xs text-white text-center">
            Tambah Admin
          </a>
        </div>
      </div>
    </div>
    @section('scripts')
      <script src="{{ asset('js/functions.js') }}"></script>
    @endsection
@endsection
  
  