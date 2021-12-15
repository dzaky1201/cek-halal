@extends('layouts.admin-layout')

@section('doc_title')
<title>Tambah Perusahaan</title>
@endsection

@section('content')
@extends('layouts.header')
@section('title')
<h1 class="text-lg -ml-6">Tambah Perusahaan</h1>
@endsection

<div id="company-form" class="mt-10 mb-12 w-11/12">
    <form class="mx-2" action="{{route('companies.store')}}" method="POST">
        @csrf
        <div class="mt-4">
            <label class="font-medium tracking-wider" for="name">Perusahaan</label>
            <input class="mt-2 form-input" type="text" name="name" id="name" placeholder="Masukkan nama perusahaan"
                required>
        </div>
        <div class="mt-4">
            <label class="font-medium tracking-wider" for="url_website">Alamat Website Perusahaan</label>
            <input class="mt-2 form-input" type="text" name="url_website" id="url_website"
                placeholder="Masukkan Alamat Website Perusahaan(URL)" required>
        </div>
        <button class="btn w-full mt-32" type="submit" name="submit">Tambahkan Perusahaan</button>
    </form>
</div>
@endsection
