<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $usuario = User::findOrFail(auth()->user()->id);

        return view('user.perfil', compact('usuario'));
    }

    public function edit($id)
    {
        $usuario = User::findOrFail($id);

        return view('user.edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);

        $usuario->nombre = $request->input('nombre');
        $usuario->fechaNacimiento = $request->input('fechaNacimiento');
        $usuario->ciudad = $request->input('ciudad');
        $usuario->pais = $request->input('pais');
        $usuario->foto = $request->input('foto');
        $usuario->email = $request->input('email');

        $usuario->save();
        return view('user.perfil', compact('usuario'));
    }

    public function destroy($id)
    {
        DB::table('users')->delete($id);

        return view('home');
    }
}
