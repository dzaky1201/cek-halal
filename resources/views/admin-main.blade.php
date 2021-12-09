@extends('layouts.admin-layout')

@section('doc_title')
  <title>Dashboard Admin</title>
@endsection

@section('content')
    @extends('layouts.header')

    @section('path')
      /
    @endsection

    @section('title')
      <h1 class="text-lg -ml-6">Dashboard Admin</h1>
    @endsection

    <div id="menu-wrapper" class="m-auto lg:mt-24 mx-auto">
      <div class="grid grid-cols-2 gap-10">
        <div class="box rounded-lg flex-col p-2 cursor-pointer hover:shadow-lg">
          <img class="w-12 h-12 block mb-3" src="{{ asset('/src/icons/package.svg') }}" alt="Add Product">
          <a class="font-medium text-xs text-white text-center">
            Tambah Produk
          </a>
        </div>
        <div class="box rounded-lg flex-col p-2 cursor-pointer hover:shadow-lg">
          <img class="w-12 h-12 block mb-2" src="{{ asset('/src/icons/company.svg') }}" alt="Add company">
          <a class="font-medium text-xs text-white text-center">
            Tambah Perusahaan
          </a>
        </div>
      </div>
      <div class="box rounded-lg flex-col p-2 cursor-pointer hover:shadow-lg mt-10 mx-auto">
        <img class="w-12 h-12 block mb-3" src="{{ asset('/src/icons/clipboard.svg') }}" alt="Add Review">
        <a class="font-medium text-xs text-white text-center">
          Tambah Ulasan
        </a>
      </div>
    </div>
@endsection
