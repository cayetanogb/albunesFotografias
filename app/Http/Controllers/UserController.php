<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $usuario = User::findOrFail(auth()->user());

        return view('user.perfil', compact('usuario'));
    }

    public function edit($id)
    {
        $usuario = User::findOrFail($id);

        return view('user.edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->nombre = $request->input('nombre');
        $user->sexo = $request->input('sexo');
        $user->fechaNacimiento = $request->input('fechaNacimiento');
        $user->ciudad = $request->input('ciudad');
        $user->pais = $request->input('pais');
        $user->foto = $request->input('foto');
        $user->email = $request->input('email');
        $user->password = $request->input('password');

        $user->save();
        return view('user.perfil');
    }

    public function destroy($id)
    {
        DB::table('users')->delete($id);

        return view('home');
    }
}
