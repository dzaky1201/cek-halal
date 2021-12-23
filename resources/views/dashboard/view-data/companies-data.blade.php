@extends('layouts.layout')

@section('doc_title')
  <title>Data Perusahaan</title>
@endsection

@section('header')
  @include('layouts.header', ['title' => "Data Perusahaan", 'path' => "/home"])
@endsection

@section('content')
  <div class="mt-10 mb-10 w-11/12 relative">
    {{-- import search bar --}}
    @include('layouts.search-bar', ['placeholder' => "Cari Perusahaan"])
    <div id="company-data" class="mt-10">

        {{-- company card --}}
        <div class="flex justify-between bg-gray-primary items-center p-3 font-medium text-sm font-primary text-medium rounded-lg mb-4">
          <p>Pt Mencari cinta sejati</p>
            {{-- edit icon --}}
          <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#000">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
            </svg>
          </a>
        </div>
       
        <div class="flex justify-between bg-gray-primary items-center p-3 font-medium text-sm font-primary text-medium rounded-lg mb-4">
          <p>Pt Mencari cinta sejati</p>
            {{-- edit icon --}}
          <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#000">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
            </svg>
          </a>
        </div>
        <div class="flex justify-between bg-gray-primary items-center p-3 font-medium text-sm font-primary text-medium rounded-lg mb-4">
          <p>Pt Mencari cinta sejati</p>
            {{-- edit icon --}}
          <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#000">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
            </svg>
          </a>
        </div>
        <div class="flex justify-between bg-gray-primary items-center p-3 font-medium text-sm font-primary text-medium rounded-lg mb-4">
          <p>Pt Mencari cinta sejati</p>
            {{-- edit icon --}}
          <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#000">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
            </svg>
          </a>
        </div>
        <div class="flex justify-between bg-gray-primary items-center p-3 font-medium text-sm font-primary text-medium rounded-lg mb-4">
          <p>Pt Mencari cinta sejati Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto temporibus sint corporis at doloribus quas modi, debitis repudiandae. Temporibus qui non labore mollitia commodi libero cupiditate quia quasi maiores ut?</p>
            {{-- edit icon --}}
          <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#000">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
            </svg>
          </a>
        </div>
        <div class="flex justify-between bg-gray-primary items-center p-3 font-medium text-sm font-primary text-medium rounded-lg mb-4">
          <p>Pt Mencari cinta sejati Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate, doloremque!</p>
            {{-- edit icon --}}
          <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#000">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
            </svg>
          </a>
        </div>
    </div>
  </div>
  {{-- bottom nav  --}}
  <div class="w-full h-20 text-center bg-white shadow-bottomNav overflow-hidden sticky bottom-0 pt-7">
    <a target="_blank" class="btn font-medium hover:shadow-xl">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline mb-1 mr-1 ml-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <span class="pr-6">Tambah Perusahaan</span>
    </a>
  </div>  
@endsection