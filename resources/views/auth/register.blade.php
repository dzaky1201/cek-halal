@extends('layouts.admin-layout')

@section('doc_title')
<title>Tambah Admin Baru</title>
@endsection

@section('content')
@extends('layouts.header')

@section('title')
<h1 class="text-lg -ml-6">Tambahkan Admin</h1>
@endsection
@section('subtitle')
<h2 class="text-sm ml-2">Super Admin</h1>
    @endsection

    <div id="admin-form" class="mt-10 mb-12 w-11/12">
        <form class="mx-2" action="/register" method="POST">
            <div class="mt-4">
                <label class="font-medium tracking-wider" for="admin_name">Nama</label>
                <input class="mt-2 form-input" type="text" name="admin_name" id="admin_name"
                    placeholder="Masukkan nama Admin" required>
            </div>
            <div class="mt-4">
                <label class="font-medium tracking-wider" for="email">E-mail</label>
                <input class="mt-2 form-input" type="email" name="email" id="email" placeholder="Masukkan E-mail"
                    required>
            </div>
            <div class="mt-4 relative">
                <label class="font-semibold tracking-wider" for="password">Password</label>
                <input id="passwordInput" class="form-input z-0" type="password" name="password" id="password"
                    placeholder="Masukkan password" required>
                <img id="eye" src="{{ asset('/src/icons/eye.svg') }}" ]
                    class="absolute top-8 right-3 cursor-pointer w-8" onclick="showPassword()" alt="view password">
                <img id="eye-closed" src="{{ asset('/src/icons/eye_close.svg') }}" ]
                    class="absolute top-8 right-3 cursor-pointer w-8 hidden" onclick="showPassword()"
                    alt="view password">
            </div>
            <div class="mt-4">
                <label class="font-medium tracking-wider" for="role">Role:</label>
                <select class="mt-2 form-input font-primary font-medium" name="role" id="role">
                    <option value="admin">Admin</option>
                    <option value="super-admin">Super Admin</option>
                </select>
            </div>
            <button class="btn w-full mt-32" type="submit" name="submit">Tambahkan Admin</button>
        </form>
    </div>

    @section('scripts')
    <script src="{{ asset('js/functions.js') }}"></script>
    @endsection
    @endsection
