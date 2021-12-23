@extends('layouts.admin-layout')

@section('doc_title')
<title>Tambah Produk</title>
@endsection

@section('header')
@include('layouts.header', ['title' => "Edit Produk", 'path' => "/dashboard/products"])
@endsection


@section('content')
<div id="product-form" class="mt-10 mb-12 w-11/12">
    <form class="mx-2" action="#" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label class="font-medium tracking-wider" for="name">Nama Produk</label>
            <input class="mt-2 form-input" type="text" name="name" id="name" placeholder="Masukkan nama produk" required
                value="{{old('name') ?? $product->name}}">
            <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
        </div>
        <div class="mt-4">
            <label class="font-medium tracking-wider" for="company_id">Pilih Perusahaan:</label>
            <select class="mt-2 form-input font-primary font-medium" name="company_id" id="company_id">
                <option value="N/A" d>--Select Company--</option>
                @foreach ($companies as $company)
                @if (old('company_id', $product->company_id) == $company->id)
                <option value="{{$company->id}}" selected>{{$company->name}}</option>
                @else
                <option value="{{$company->id}}">{{$company->name}}</option>
                @endif

                @endforeach
            </select>
        </div>
        <div class="mt-4">
            <label class="font-medium tracking-wider block mb-2" for="halal_status">
                Keterangan: (Status Sertifikasi Halal)
            </label>
            <div class="form-input border-dashed">
                <input class="mr-2" type="radio" name="is_halal" value="halal_false" onclick="isHalal(value)">
                Belum Tersertifikasi<br>
                <input class="mr-2" type="radio" name="is_halal" value="halal_true" onclick="isHalal(value)">
                Tersertifikasi Halal
            </div>
        </div>
        {{-- form below will only shown if product is halal --}}
        <div id="cert_number" class="mt-4 hidden">
            <label class="font-medium tracking-wider" for="certification_number">Nomor sertifikasi</label>
            <input class="mt-2 form-input" type="text" name="certification_number" id="certification_number"
                placeholder="Masukkan nomor sertifikasi"
                value="{{old('certification_number') ?? $product->certification_number}}">
        </div>
        <div id="exp_date" class="mt-4 hidden">
            <label class="font-medium tracking-wider" for="expired_date">Expire Date</label>
            <input class="mt-2 form-input" type="text" name="expired_date" id="expired_date" placeholder="xx-xx-xxxx"
                value="{{old('expired_date') ?? $product->expire_date}}">
        </div>
        {{-- end --}}
        {{-- komposisi --}}
        {{-- <div class=" mt-4">
            <label class="font-medium tracking-wider" for="ingredients">Komposisi</label>
            <input class="mt-2 form-input" type="text" name="ingredients" id="ingredients"
                placeholder="Masukkan komposisi produk" required
                value="{{old('ingredients') ?? $product->ingredients}}">
        </div> --}}

        {{-- ini saya ubah input komposisi jadi text area mas --}}
        <div class="mt-4 pr-1">
            <label class="font-medium tracking-wider mb-2" for="ingredients">Komposisi</label>
            <textarea id="ingredients" class="mt-1 form-input resize-x" name="ingredients" rows="4" cols="30"
            placeholder="Masukkan Komposisi" required>{{old('ingredients') ?? $product->ingredients}}</textarea>
        </div>
        <div class=" mt-4">
            <label class="font-medium tracking-wider" for="image">Foto produk</label>
            <input class="mt-2 form-input border-dashed" type="file" name="image" id="image"
                placeholder="Masukkan Foto produk" required>
        </div>
        <button class="btn w-full mt-32" type="submit" name="submit">Update Produk</button>
    </form>
</div>

@section('scripts')
<script src="{{ asset('js/functions.js') }}"></script>
@endsection
@endsection
