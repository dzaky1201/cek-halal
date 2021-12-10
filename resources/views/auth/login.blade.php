@extends('layouts.admin-layout')

@section('doc_title')
<title>Halaman Login Admin</title>
@endsection

@section('content')
<div id="logo">
    <img class="mx-auto mt-28 border-2" src="https://picsum.photos/121" alt="logo">
</div>
<div id="login-form" class="mt-10 w-11/12">
    <form action="/login" method="POST">
        @csrf
        <div class="mx-2">
            <label class="font-semibold tracking-wider" for="username">Username</label>
            <input class="form-input" type="text" name="username" id="username" placeholder="Masukkan username"
                required>
        </div>
        <div class="mt-7 mx-2 relative">
            <label class="font-semibold tracking-wider" for="password">Password</label>
            <input id="passwordInput" class="form-input z-0" type="password" name="password" id="password"
                placeholder="Masukkan password" required>
            <img id="eye" src="{{ asset('/src/icons/eye.svg') }}" class="absolute top-8 right-3 cursor-pointer w-8"
                onclick="showPassword()" alt="view password">
            <img id="eye-closed" src="{{ asset('/src/icons/eye_close.svg') }}"
                class="absolute top-8 right-3 cursor-pointer w-8 hidden" onclick="showPassword()" alt="view password">
        </div>
        <div class="text-center mb-72 lg:mb-36">
            <input class="btn font-medium mt-20 w-8/12" type="submit" value="Login">
        </div>
    </form>
</div>
@section('scripts')
<script src="{{ asset('js/functions.js') }}"></script>
@endsection
@endsection
