@extends('layouts.admin-layout')

@section('doc_title')
<title>Tambah Admin Baru</title>
@endsection

@section('header')
@include('layouts.header', ['title' => "Edit User", 'path' => '/dashboard/registers'])
@endsection

@section('content')

@section('subtitle')
<h2 class="text-sm ml-2">Super Admin</h1>
    @endsection

    <div id="admin-form" class="mt-10 mb-12 w-11/12">
        <form class="mx-2" action="{{route('registers.update',['register'=>$user->id])}}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mt-4">
                <label class="font-medium tracking-wider" for="name">Nama</label>
                <input class="mt-2 form-input" type="text" name="name" id="name" placeholder="Masukkan nama Admin"
                    required value="{{old('name') ?? $user->name}}">
            </div>
            <div class="mt-4">
                <label class="font-medium tracking-wider" for="name">username</label>
                <input class="mt-2 form-input" type="text" name="username" id="username"
                    placeholder="Masukkan nama username" required value="{{old('username') ?? $user->username}}">
            </div>
            <div class="mt-4">
                <label class="font-medium tracking-wider" for="role">Role:</label>
                <select class="mt-2 form-input font-primary font-medium" name="role" id="role">
                    <option value="admin" {{(old('role') ?? $user->role) == 'admin' ? 'selected' : ''}}>Admin
                    </option>
                    <option value="super-admin" {{(old('role') ?? $user->role) == 'super-admin' ? 'selected' :
                        ''}}>Super Admin</option>
                </select>
            </div>
            <button class="btn w-full mt-32" type="submit" name="submit">Update User</button>
        </form>
    </div>

    @section('scripts')
    <script src="{{ asset('js/functions.js') }}"></script>
    @endsection
    @endsection
