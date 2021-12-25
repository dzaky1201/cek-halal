<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller

{

    public function index()
    {
        $users = User::latest()->searching(request(['search']))->get();
        return view('dashboard.view-data.data-admin', ['users' => $users]);
    }



    public function create()
    {
        return view('auth.register');
    }


    public function store(Request $request)
    {

        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'role' => 'required|in:admin,super-admin',
            'password' => 'required|min:5|max:255'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        return redirect()->route('registers.index')->with('pesan', 'registration completed');
    }


    public function show(User $user)
    {
        //
    }


    public function edit(User $register)
    {
        return view('auth.edit-user', ['user' => $register]);
    }


    public function update(Request $request, User $register)
    {
        $rules = [
            'name' => 'required|max:255',
            'role' => 'required|in:admin,super-admin',
        ];


        if ($request->username != $register->username) {
            $rules['username'] = 'required|min:5|max:255|unique:users';
        }

        $validateData = $request->validate($rules);

        User::where('id', $register->id)
            ->update($validateData);

        return redirect()->route('registers.index')->with('pesan', 'User berhasil di update');
    }


    public function destroy(User $register)
    {
        User::destroy($register->id);
        return redirect()->route('registers.index')->with('pesan', 'User Berhasil Dihapus');
    }
}
