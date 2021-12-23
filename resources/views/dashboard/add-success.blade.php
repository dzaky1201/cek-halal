@extends('layouts.admin-layout')

@section('doc_title')
<title>Tambah Berhasil</title>
@endsection

@section('content')
<header class="w-full bg-bg_large relative">
    <nav class="header max-w-mobile mx-auto flex justify-center items-center">
        <h1 class="text-lg -mr-6">Tambah Data Berhasil</h1>
    </nav>
</header>

<div class="mx-auto mt-36 w-10/12 ">
    <div class="flex mb-32 flex-col text-center text-sm w-4/5 mx-auto">
        <img class="mx-auto w-40 h-40" src="{{ asset('/src/illustrations/char1.svg') }}"" alt=" people gesturing
            gratitude">
        <p class="mt-5">
            Jazakumullahu khairan, data dan informasi telah berhasil ditambahkan, semoga dapat berguna bagi kita semua!
            <span>
                <a class="text-primary-100 font-medium" href="#">Tambahkan data lainnya<a>
            </span>
        </p>
    </div>
    <a class="block btn mb-12" href="/dashboard">Kembali ke halaman admin</a>
</div>
@endsection
