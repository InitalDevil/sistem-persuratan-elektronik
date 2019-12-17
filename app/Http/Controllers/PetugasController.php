<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PetugasController extends Controller
{

    public function index()
    {
        $petugas = User::All();
        return view('petugas.index')->with('petugas', $petugas);
    }

    public function create()
    {
        return view('petugas.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'role' => 'required|string'
        ]);
        $user = $request->except('_token');
        $user['password'] = bcrypt($user['password']);
        $store = User::create($user);
        return redirect()->route('petugas.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('petugas.index');
    }
}
