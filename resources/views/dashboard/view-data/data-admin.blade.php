@extends('layouts.layout')

@section('doc_title')
  <title>Data Admin</title>
@endsection

@section('header')
  @include('layouts.header', ['title' => "Data Admin", 'path' => "/home"])
@endsection

@section('content')
  <div class="mt-10 mb-10 w-11/12 relative">
    {{-- import search bar --}}
    @include('layouts.search-bar', ['placeholder' => "Cari Admin"])
    <div id="admin-data" class="mt-10">

        {{-- admin card--}}
        <div class="flex justify-between bg-gray-primary items-center p-3 font-medium text-sm font-primary text-medium rounded-lg mb-4">
          <p>Admin - Halall</p>
          <div class="flex">
            <a href="">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline mx-1" fill="none" viewBox="0 0 24 24" stroke="#000">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
              </svg>
              {{-- delete icon --}}
              <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline mx-1" fill="none" viewBox="0 0 24 24" stroke="#FF0000">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
              </a>
          </div>
        </div>
        {{-- admin card end --}}

        <div class="flex justify-between bg-gray-primary items-center p-3 font-medium text-sm font-primary text-medium rounded-lg mb-4">
          <p>Admin - Halall</p>
          <div class="flex">
            <a href="">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline mx-1" fill="none" viewBox="0 0 24 24" stroke="#000">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
              </svg>
              {{-- delete icon --}}
              <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline mx-1" fill="none" viewBox="0 0 24 24" stroke="#FF0000">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
              </a>
          </div>
        </div>
        <div class="flex justify-between bg-gray-primary items-center p-3 font-medium text-sm font-primary text-medium rounded-lg mb-4">
          <p>Admin - Halall</p>
          <div class="flex">
            <a href="">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline mx-1" fill="none" viewBox="0 0 24 24" stroke="#000">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
              </svg>
              {{-- delete icon --}}
              <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline mx-1" fill="none" viewBox="0 0 24 24" stroke="#FF0000">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
              </a>
          </div>
        </div>
        <div class="flex justify-between bg-gray-primary items-center p-3 font-medium text-sm font-primary text-medium rounded-lg mb-4">
          <p>Admin - Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur enim tempora facilis officiis rem laboriosam eum recusandae distinctio minus iure dolores omnis, corporis, impedit sequi eos earum dignissimos provident quis!</p>
          <div class="flex">
            <a href="">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline mx-1" fill="none" viewBox="0 0 24 24" stroke="#000">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
              </svg>
              {{-- delete icon --}}
              <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline mx-1" fill="none" viewBox="0 0 24 24" stroke="#FF0000">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
              </a>
          </div>
        </div>
        <div class="flex justify-between bg-gray-primary items-center p-3 font-medium text-sm font-primary text-medium rounded-lg mb-4">
          <p>Admin - Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur enim tempora facilis officiis rem laboriosam eum recusandae distinctio minus iure dolores omnis, corporis, impedit sequi eos earum dignissimos provident quis!</p>
          <div class="flex">
            <a href="">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline mx-1" fill="none" viewBox="0 0 24 24" stroke="#000">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
              </svg>
              {{-- delete icon --}}
              <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline mx-1" fill="none" viewBox="0 0 24 24" stroke="#FF0000">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
              </a>
          </div>
      </div>
    </div>
  </div>
  {{-- bottom nav  --}}
  <div class="w-full h-20 text-center bg-white shadow-bottomNav overflow-hidden sticky bottom-0 pt-7">
    <a target="_blank" class="btn font-medium hover:shadow-xl">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline mb-1 mr-1 ml-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <span class="pr-6">Tambah Admin</span>
    </a>
  </div> 
@endsection