@extends('layouts.admin-layout')

@section('doc_title')
<title>Tambah Perusahaan</title>
@endsection

@section('header')
@include('layouts.header', ['title' => "Tambah Perusahaan", 'path' => "/dashboard/companies"])
@endsection

@section('content')
<div id="company-form" class="mt-10 mb-12 w-11/12">
    <form class="mx-2" action="{{route('companies.update', ['company' => $company->id])}}" method="POST">
        @method('PATCH')
        @csrf
        <div class="mt-4">
            <label class="font-medium tracking-wider" for="name">Perusahaan</label>
            <input class="mt-2 form-input" type="text" name="name" id="name" placeholder="Masukkan nama perusahaan"
                required value="{{old('name') ?? $company->name}}">
        </div>
        <div class="mt-4">
            <label class="font-medium tracking-wider" for="url_website">Alamat Website Perusahaan</label>
            <input class="mt-2 form-input" type="text" name="url_website" id="url_website"
                placeholder="Masukkan Alamat Website Perusahaan(URL)" required
                value="{{old('url_website') ?? $company->url_website}}">
        </div>
        <button class="btn w-full mt-32" type="submit" name="submit">Update Perusahaan</button>
    </form>
</div>
@endsection
