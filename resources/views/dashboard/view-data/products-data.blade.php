@extends('layouts.layout')

@section('doc_title')
  <title>Data Produk</title>
@endsection

@section('header')
  @include('layouts.header', ['title' => "Data Produk", 'path' => "/home"])
@endsection

@section('content')
  <div class="mt-10 mb-10 w-11/12 relative">
    {{-- import search bar --}}
    @include('layouts.search-bar', ['placeholder' => "Masukkan nama produk"])
    <div id="search-result">
      <div id="result-container" class="mt-8">
        <div class="card flex p-3 mb-3 h-28 bg-gray-100 rounded-lg shadow-md">
          <img class="rounded-lg" src="{{ asset('src/img/noodle.png') }}" alt="food">
          <div class="ml-3 truncate content-center">
            <div>
              <h3 class="font-bold font-primary my-2">Mie ayam bakso Lorem ipsum dolor sit amet.</h3>
              <h4 class="mt-1 truncate ...">
                Pt makan enak Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, a?
              </h4>
            </div>
          </div>
          <div class="flex content-center items-center justify-between ml-2">
            {{-- edit icon --}}
            <a href="">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
              </svg>
            </a>
            {{-- delete icon --}}
            <a>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-1.5 delete-button" fill="none" viewBox="0 0 24 24" stroke="#FF0000">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
              </svg>
            </a>
          </div>
         
        </div>
        <div class="card flex p-3 mb-3 h-28 bg-gray-100 rounded-lg shadow-md">
          <img class="rounded-lg" src="{{ asset('src/img/noodle.png') }}" alt="food">
          <div class="ml-3 truncate content-center">
            <div>
              <h3 class="font-bold font-primary my-2">Mie ayam bakso</h3>
              <h4 class="mt-1 truncate ...">
                Pt makan enak Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, a?
              </h4>
            </div>
          </div>
          <div class="flex content-center items-center justify-between ml-2">
            {{-- edit icon --}}
            <a href="">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
              </svg>
            </a>
            {{-- delete icon --}}
            <a>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-1.5 delete-button" fill="none" viewBox="0 0 24 24" stroke="#FF0000">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
              </svg>
            </a>
          </div>
        </div>
        <div class="card flex p-3 mb-3 h-28 bg-gray-100 rounded-lg shadow-md">
          <img class="rounded-lg" src="{{ asset('src/img/noodle.png') }}" alt="food">
          <div class="ml-3 truncate content-center">
            <div>
              <h3 class="font-bold font-primary my-2">Mie ayam bakso</h3>
              <h4 class="mt-1 truncate ...">
                Pt makan enak Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, a?
              </h4>
            </div>
          </div>
          <div class="flex content-center items-center justify-between ml-2">
            {{-- edit icon --}}
            <a href="">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
              </svg>
            </a>
            {{-- delete icon --}}
            <a>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-1.5 delete-button" fill="none" viewBox="0 0 24 24" stroke="#FF0000">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
              </svg>
            </a>
          </div>
        </div>
        <div class="card flex p-3 mb-3 h-28 bg-gray-100 rounded-lg shadow-md">
          <img class="rounded-lg" src="{{ asset('src/img/noodle.png') }}" alt="food">
          <div class="ml-3 truncate content-center">
            <div>
              <h3 class="font-bold font-primary my-2">Mie ayam bakso</h3>
              <h4 class="mt-1 truncate ...">
                Pt makan enak Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, a?
              </h4>
            </div>
          </div>
          <div class="flex content-center items-center justify-between ml-2">
            {{-- edit icon --}}
            <a href="">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
              </svg>
            </a>
            {{-- delete icon --}}
            <a>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-1.5 delete-button" fill="none" viewBox="0 0 24 24" stroke="#FF0000">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
              </svg>
            </a>
          </div>
        </div>
        <div class="card flex p-3 mb-3 h-28 bg-gray-100 rounded-lg shadow-md">
          <img class="rounded-lg" src="{{ asset('src/img/noodle.png') }}" alt="food">
          <div class="ml-3 truncate content-center">
            <div>
              <h3 class="font-bold font-primary my-2">Mie ayam bakso</h3>
              <h4 class="mt-1 truncate ...">
                Pt makan enak Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, a?
              </h4>
            </div>
          </div>
          <div class="flex content-center items-center justify-between ml-2">
            {{-- edit icon --}}
            <a href="">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
              </svg>
            </a>
            {{-- delete icon --}}
            <a>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-1.5 delete-button" fill="none" viewBox="0 0 24 24" stroke="#FF0000">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
              </svg>
            </a>
          </div>
        </div>
        <div class="card flex p-3 mb-3 h-28 bg-gray-100 rounded-lg shadow-md">
          <img class="rounded-lg" src="{{ asset('src/img/noodle.png') }}" alt="food">
          <div class="ml-3 truncate content-center">
            <div>
              <h3 class="font-bold font-primary my-2">Mie ayam bakso</h3>
              <h4 class="mt-1 truncate ...">
                Pt makan enak Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, a?
              </h4>
            </div>
          </div>
          <div class="flex content-center items-center justify-between ml-2">
            {{-- edit icon --}}
            <a href="">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
              </svg>
            </a>
            {{-- delete icon --}}
            <a>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-1.5 delete-button" fill="none" viewBox="0 0 24 24" stroke="#FF0000">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>

    </div>
    {{-- bottom nav  --}}
    <div class="w-full h-20 text-center bg-white shadow-bottomNav overflow-hidden sticky bottom-0 pt-7">
      <a href="" class="btn font-medium hover:shadow-xl">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline mb-1 mr-1 ml-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span class="pr-6">Tambah Data</span>
      </a>
    </div>  
  </div>

  {{-- Modall --}}
  <div id="modal"
  class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center bg-black bg-opacity-50 transform scale-0 transition-transform duration-300">
  <!-- Modal content -->
  <div class="bg-white w-64 h-42 rounded-lg">
      <header class="p-2 bg-primary-100 text-sm rounded-tr-lg rounded-tl-lg">
        <h2 class="text-center text-white font-semibold font-primary">Konfirmasi</h2>
      </header>
      <div class="flex flex-col p-3 items-center">
          <h3 class="text-center font-semibold font-primary mt-2">
            Apakah kamu yakin ingin menghapus produk ini?
          </h3>
          <div>
            <button id="closebutton" type="button"
              class="bg-gray-secondary rounded-xl text-white text-center cursor-pointer 
                      hover:shadow-md px-4 py-3 mb-2 mt-6 mx-3">
              Batal
            </button>
            <button type="button"
              class="bg-red-600 rounded-xl text-white text-center cursor-pointer 
                      hover:shadow-md px-4 py-3 mbs-2 mt-6 mx-3">
              Hapus
            </button>
          </div>
      </div>
  </div>

  @section('scripts')
    <script src="{{ asset('js/modal.js') }}"></script>      
  @endsection

@endsection