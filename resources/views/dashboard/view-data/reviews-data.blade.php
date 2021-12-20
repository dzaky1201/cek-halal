@extends('layouts.layout')

@section('doc_title')
  <title>Data Ulasan</title>
@endsection

@section('header')
  @include('layouts.header', ['title' => "Data Ulasan", 'path' => "/home"])
@endsection

@section('content')
  <div class="mt-10 mb-10 w-11/12 relative">
    {{-- import search bar --}}
    @include('layouts.search-bar', ['placeholder' => "Cari Ulasan"])
    <div id="search-result">

      {{-- review card component --}}
      <div class="review-card">
        <div class="mt-8 mx-2 bg-gray-100 rounded-br-lg rounded-bl-lg">
          {{-- review header --}}
          <div id="review-header" class="rounded-lg">
            <div id="review-header-container" 
                 class="h-12 bg-primary-100 flex justify-between content-center rounded-t-lg pr-2 pl-4">
              <h3 class="text-white font-medium pt-3">Maudy Ayundah</h3>
              <div class="flex content-center items-center justify-between ml-2">
                {{-- edit icon --}}
                <a href="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-1.5" fill="none" viewBox="0 0 24 24" stroke="#FFFFFF">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                  </svg>
                </a>
                {{-- delete icon --}}
                <a href="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-1.5" fill="none" viewBox="0 0 24 24" stroke="#FFFFFF">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                  </svg>
                </a>
              </div>
            </div>
            {{-- review content --}}
            {{-- product desc --}}
            <div class="flex px-4 pt-3 h-20 rounded-lg items-center">
              <img class="rounded-lg h-12 w-12" src="{{ asset('src/img/noodle.png') }}" alt="food">
              <div class="ml-3 truncate items-center">
                <div>
                  <h3 class="font-bold font-primary my-1 text-sm">Mie ayam bakso</h3>
                  <h4 class="truncate ... text-gray-secondary text-sm">
                    Pt makan enak Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, a?
                  </h4>
                </div>
              </div>
            </div>
            {{-- review --}}
            <div class="p-4 pt-0  ">
              <p class="text-sm text-justify line-clamp-4">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus ullam incidunt beatae quidem similique molestiae reiciendis itaque quisquam rerum quis. Impedit, omnis vitae officia accusantium quo eos quae hic quisquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, ipsum..
              </p>
              <p class="text-xs text-primary-100 mt-3">
                Sumber: 
                <span>
                  <a href="halal.com/infohalal" class="underline">
                    halal.com/infohalal
                  </a>
                </span>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="review-card">
        <div class="mt-8 mx-2 bg-gray-100 rounded-br-lg rounded-bl-lg">
          {{-- review header --}}
          <div id="review-header" class="rounded-lg">
            <div id="review-header-container" 
                 class="h-12 bg-primary-100 flex justify-between content-center rounded-t-lg pr-2 pl-4">
              <h3 class="text-white font-medium pt-3">Maudy Ayundah</h3>
              <div class="flex content-center items-center justify-between ml-2">
                {{-- edit icon --}}
                <a href="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-1.5" fill="none" viewBox="0 0 24 24" stroke="#FFFFFF">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                  </svg>
                </a>
                {{-- delete icon --}}
                <a href="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-1.5" fill="none" viewBox="0 0 24 24" stroke="#FFFFFF">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                  </svg>
                </a>
              </div>
            </div>
            {{-- review content --}}
            {{-- product desc --}}
            <div class="flex px-4 pt-3 h-20 rounded-lg items-center">
              <img class="rounded-lg h-12 w-12" src="{{ asset('src/img/noodle.png') }}" alt="food">
              <div class="ml-3 truncate items-center">
                <div>
                  <h3 class="font-bold font-primary my-1 text-sm">Mie ayam bakso</h3>
                  <h4 class="truncate ... text-gray-secondary text-sm">
                    Pt makan enak Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, a?
                  </h4>
                </div>
              </div>
            </div>
            {{-- review --}}
            <div class="p-4 pt-0  ">
              <p class="text-sm text-justify line-clamp-4">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus ullam incidunt beatae quidem similique molestiae reiciendis itaque quisquam rerum quis. Impedit, omnis vitae officia accusantium quo eos quae hic quisquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, ipsum..
              </p>
              <p class="text-xs text-primary-100 mt-3">
                Sumber: 
                <span>
                  <a href="halal.com/infohalal" class="underline">
                    halal.com/infohalal
                  </a>
                </span>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="review-card">
        <div class="mt-8 mx-2 bg-gray-100 rounded-br-lg rounded-bl-lg">
          {{-- review header --}}
          <div id="review-header" class="rounded-lg">
            <div id="review-header-container" 
                 class="h-12 bg-primary-100 flex justify-between content-center rounded-t-lg pr-2 pl-4">
              <h3 class="text-white font-medium pt-3">Maudy Ayundah</h3>
              <div class="flex content-center items-center justify-between ml-2">
                {{-- edit icon --}}
                <a href="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-1.5" fill="none" viewBox="0 0 24 24" stroke="#FFFFFF">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                  </svg>
                </a>
                {{-- delete icon --}}
                <a href="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-1.5" fill="none" viewBox="0 0 24 24" stroke="#FFFFFF">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                  </svg>
                </a>
              </div>
            </div>
            {{-- review content --}}
            {{-- product desc --}}
            <div class="flex px-4 pt-3 h-20 rounded-lg items-center">
              <img class="rounded-lg h-12 w-12" src="{{ asset('src/img/noodle.png') }}" alt="food">
              <div class="ml-3 truncate items-center">
                <div>
                  <h3 class="font-bold font-primary my-1 text-sm">Mie ayam bakso</h3>
                  <h4 class="truncate ... text-gray-secondary text-sm">
                    Pt makan enak Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, a?
                  </h4>
                </div>
              </div>
            </div>
            {{-- review --}}
            <div class="p-4 pt-0  ">
              <p class="text-sm text-justify line-clamp-4">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus ullam incidunt beatae quidem similique molestiae reiciendis itaque quisquam rerum quis. Impedit, omnis vitae officia accusantium quo eos quae hic quisquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, ipsum..
              </p>
              <p class="text-xs text-primary-100 mt-3">
                Sumber: 
                <span>
                  <a href="halal.com/infohalal" class="underline">
                    halal.com/infohalal
                  </a>
                </span>
              </p>
            </div>
          </div>
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
      <span class="pr-6">Tambah Ulasan</span>
    </a>
  </div>  

@endsection