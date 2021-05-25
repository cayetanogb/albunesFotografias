<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('foto.create');
    }

    public function store(Request $request)
    {
        $foto = new Foto;

        $foto->titulo = $request->input('titulo');
        $foto->pais = $request->input('pais');
        $foto->foto = $request->input('foto');

        $albun = $request->input('albun');
        $albun->fotos()->save($foto);

        return view('home');
    }

    public function show($id)
    {
        $foto = Foto::findOrFail($id);

        return view('foto.show', compact('foto'));
    }

    public function edit($id)
    {
        $foto = Foto::findOrFail($id);

        return view('foto.edit', compact('foto'));
    }

    public function update(Request $request, $id)
    {
        $foto = Foto::findOrFail($id);

        $foto->titulo = $request->input('titulo');
        $foto->pais = $request->input('pais');
        $foto->foto = $request->input('foto');

        return view('home');
    }

    public function destroy($id)
    {
        DB::table('fotos')->delete($id);

        return view('home');
    }
}
