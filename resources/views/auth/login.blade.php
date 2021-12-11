@extends('layouts.admin-layout')

@section('doc_title')
  <title>Halaman Login Admin</title>
@endsection

@section('content')
    <div id="logo">
      <img class="mx-auto mt-28 border-2" src="https://picsum.photos/121" alt="logo">
    </div>
    <div id="login-form" class="mt-10 w-11/12">
      <form action="" method="post">
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

    <!--Open modal button-->
    {{-- modal button bisa dihapus nanti, ini untuk contoh aja mas untuk ngeliat modalnya --}}
    <div>    
      <button id="buttonmodal" onclick="showModal()" class="focus:outline-none p-2 bg-blue-600 text-white bg-opacity-75 rounded-lg ring-4 ring-indigo-300 mb-10" type="button">Open modal</button>
    </div>

    {{-- gunakan fungsi showModal() untuk menampilkan modal --}}
    <div id="modal"
      class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center bg-black bg-opacity-50 transform scale-0 transition-transform duration-300">
      <!-- Modal content -->
      <div class="bg-white w-64 h-42 border-2 rounded-lg border-primary-100"> 
        <header class="header rounded-tr-lg rounded-tl-lg"></header>
        <div class="flex flex-col p-3 items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="#209777">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
          </svg>
          <h1 class="text-center text-lg font-medium mt-2">Login Berhasil!</h1>
          <button id="closebutton" type="button" class="bg-primary-100 rounded-xl text-white text-center cursor-pointer hover:shadow-md px-4 py-3 mb-2 mt-6 focus:outline-none">
            Tutup
          </button>
        </div>
      </div>
    </div>
    @section('scripts')
      <script src="{{ asset('js/functions.js') }}"></script>
    @endsection
@endsection
  
