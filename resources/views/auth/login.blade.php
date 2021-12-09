@extends('layout.app')

@section('content')
<main class="bg-gray-100">
    <div id="wrapper" class="wrapper-mobile">
        <div id="logo">
            <img class="mx-auto mt-28 border-2" src="https://picsum.photos/121" alt="logo">
        </div>
        @if (session()->has('pesan'))
        <h1>{{session('pesan')}}</h1>
        @endif
        <div id="login-form" class="mt-10 w-11/12">
            <form action="/login" method="POST" class="form-admin">
                @csrf
                <div class="form-admin mx-2">
                    <label class="font-semibold tracking-wider" for="username">Email</label>
                    <input class="form-input" type="text" name="email" id="email" placeholder="admin@example.com"
                        required autofocus value="{{old('email')}}">
                </div>
                <div class="form-admin mt-7 mx-2 relative">
                    <label class="font-semibold tracking-wider" for="password">Password</label>
                    <input id="passwordInput" class="form-input z-0" type="password" name="password" id="password"
                        placeholder="Masukkan password" required>
                    <img id="eye" src="{{ asset('/src/icons/eye.svg') }}" ]
                        class="absolute top-10 right-3 cursor-pointer w-8" onclick="showPassword()" alt="view password">
                    <img id="eye-closed" src="{{ asset('/src/icons/eye_close.svg') }}" ]
                        class="absolute top-10 right-3 cursor-pointer w-8 hidden" onclick="showPassword()"
                        alt="view password">
                </div>
                <div class="form-admin text-center mb-72 lg:mb-36">
                    <input class="btn font-medium mt-20 w-8/12" type="submit" value="Login">
                </div>
            </form>
        </div>
    </div>
</main>
<script src="{{ asset('js/showPassword.js') }}"></script>
@endsection
