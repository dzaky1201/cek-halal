@extends('layouts.admin-layout')

@section('doc_title')
<title>Tambah Produk</title>
@endsection

@section('header')
@include('layouts.header', ['title' => "Tambah Produk", 'path' => "/dashboard/products"])
@endsection


@section('content')
<div id="product-form" class="mt-10 mb-12 w-11/12">
    <form class="mx-2" action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label class="font-medium tracking-wider" for="name">Nama Produk</label>
            <input class="mt-2 form-input" type="text" name="name" id="name" placeholder="Masukkan nama produk" required
                value="{{old('name')}}">
            <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
        </div>
        <div class="mt-4">
            <label class="font-medium tracking-wider" for="company_id">Pilih Perusahaan:</label>
            <select class="mt-2 form-input font-primary font-medium" name="company_id" id="company_id">
                <option value="N/A" d>--Select Company--</option>
                @foreach ($companies as $company)
                <option value="{{$company->id}}">{{$company->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-4">
            <label class="font-medium tracking-wider block mb-2" for="halal_status">
                Keterangan: (Status Sertifikasi Halal)
            </label>
            <div class="form-input border-dashed">
                <input class="mr-2" type="radio" name="is_halal" onclick="isHalal(this.value)" value="false">
                Belum Tersertifikasi<br>
                <input class="mr-2" type="radio" name="is_halal" onclick="isHalal(this.value)" value="true">
                Tersertifikasi Halal
            </div>
        </div>
        {{-- form below will only shown if product is halal --}}
        <div id="cert_number" class="mt-4 hidden">
            <label class="font-medium tracking-wider" for="certification_number">Nomor sertifikasi</label>
            <input class="mt-2 form-input" type="text" name="certification_number" id="certification_number"
                placeholder="Masukkan nomor sertifikasi" value="{{old('certification_number')}}">
        </div>
        <div id="exp_date" class="mt-4 hidden">
            <label class="font-medium tracking-wider" for="expire_date">Expire Date</label>
            <input class="mt-2 form-input" type="text" name="expire_date" id="expire_date" placeholder="xx-xx-xxxx"
                value="{{old('expire_date')}}">
        </div>
        {{-- end --}}
        <div class="mt-4 pr-1">
            <label class="font-medium tracking-wider mb-2" for="ingredients">Komposisi</label>
            <textarea id="ingredients" class="mt-1 form-input resize-x" name="ingredients" rows="4" cols="30"
                placeholder="Masukkan Komposisi" required value="{{old('ingredients')}}"></textarea>
        </div>
        <div class=" mt-4">
            <label class="font-medium tracking-wider" for="image">Foto produk</label>
            <input class="mt-2 form-input border-dashed" type="file" name="image" id="image"
                placeholder="Masukkan Foto produk">
        </div>
        <button class="btn w-full mt-32" type="submit" name="submit">Tambah Produk</button>
    </form>
</div>

@section('scripts')
<script src="{{ asset('js/functions.js') }}"></script>
@endsection
@endsection
