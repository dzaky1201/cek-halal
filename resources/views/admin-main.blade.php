@extends('layouts.admin-layout')

@section('doc_title')
  <title>Dashboard Admin</title>
@endsection

@section('content')
  <header class="w-full bg-bg_large relative">
    <nav class="header max-w-mobile mx-auto flex justify-between items-center">
       <h1 class="text-lg -mr-6">Admin</h1>
        <div class="flex">
          <img class="mx-auto" src="{{ asset('/src/icons/Profile.svg') }}" alt="logout">
          <div class="ml-1">
            <h3 class="text-sm">Fulanah</h3>
            <h4 class="text-xs">Admin</h4>
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
      {{-- Layout Super Admin --}}
      {{-- <div class="box rounded-lg flex-col p-2">
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
      </div> --}}
    </div>
    <div class="box rounded-lg flex-col p-2 mt-10 mx-auto">
      <img class="w-12 h-12 block mb-3" src="{{ asset('/src/icons/clipboard.svg') }}" alt="Add Review">
      <a class="font-medium text-xs text-white text-center">
        Tambah Ulasan
      </a>
    </div>
    <button 
    class="p-2 w-full bg-lavender_rose text-white rounded-xl text-center cursor-pointer hover:shadow-md mt-32" 
    type="submit" name="submit">
      Logout
    </button>
  </div>

  @section('scripts')
      <script src="{{ asset('js/functions.js') }}"></script>
  @endsection
@endsection
