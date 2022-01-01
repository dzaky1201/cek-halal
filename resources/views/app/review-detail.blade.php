@extends('layouts.layout')

@section('doc_title')
<title>Detail Ulasan</title>
@endsection

@section('header')
@include('layouts.header', ['title' => "Detail Ulasan", 'path' => "/product-list"])
@endsection


@section('content')
<div class="mb-12 mt-11 w-11/12 xs:mt-14 xs:w-10/12">
    <div id="reviewer">
        <h1 class="ml-2 mb-6 text-2xl font-primary font-bold text-primary-100">
            Bang Komeng
        </h1>
    </div>
    <div id="product-detail" 
        class="flex flex-col xs:px-2 xs:flex-row ">
        <img class="
            rounded-lg max-h-32 object-scale-down mb-5 xs:mb-0 " 
            src="{{ asset('src/img/noodle-soup.jpg') }}"
            {{-- alt="{{$product->name}}"> --}}
            alt="food">
        <div id="product-desc" 
            class="
            flex-auto ml-1.5 px-1 xs:ml-7 xs:pt-0.5">
            <div class="text-left">
                {{-- <h1 class="font-bold text-xl font-primary">{{$product->name}}</h1> --}}
                <h1 class="font-bold font-primary text-lg xs:text-xl">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </h1>
                <h2 class="text-gray-secondary font-bold tracking-wide font-primary text-sm mt-2">
                    {{-- {{$product->company->name}} --}}
                    Pt. Coklat kacang
                </h2>
            </div>
        </div>
    </div>
    <div id="review">
        <div class="mt-8 mx-auto ml-1 px-1.5 w-full">
            <div class="mb-6">
                <p class="text-sm text-justify font-primary font-medium">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae doloremque sit repudiandae sed ipsum eveniet ea provident obcaecati iste hic vel, reprehenderit possimus minus soluta nemo, ut dolore distinctio quaerat!
                </p>
            </div>
            <a class="font-primary text-xs font-semibold tracking-wide text-primary-100 underline"
               href="">
                Sumber: halal.com/info-halal
            </a>
        </div>
    </div>
</div>
@endsection
