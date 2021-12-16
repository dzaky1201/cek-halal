@extends('layouts.admin-layout')

@section('doc_title')
  <title>Tambah Perusahaan</title>
@endsection

@section('header')
  @include('layouts.header', ['title' => "Tambah Perusahaan"])
@endsection

@section('content')
    <div id="company-form" class="mt-10 mb-12 w-11/12">
      <form class="mx-2" action="" method="post">
          <div class="mt-4">
            <label class="font-medium tracking-wider" for="company_name">Perusahaan</label>
            <input class="mt-2 form-input" type="text" name="company_name" id="company_name" 
              placeholder="Masukkan nama perusahaan"
              required>
          </div>
          <div class="mt-4">
            <label class="font-medium tracking-wider" for="company_source">Alamat Website Perusahaan</label>
            <input class="mt-2 form-input" type="text" name="company_source" id="company_source" 
              placeholder="Masukkan Alamat Website Perusahaan(URL)"
              required>
          </div>
          <button class="btn w-full mt-32" type="submit" name="submit">Tambahkan Perusahaan</button>
      </form>
    </div>
@endsection
  