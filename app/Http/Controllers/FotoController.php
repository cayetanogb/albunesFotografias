<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FotoController extends Controller
{
    public function index()
    {
        $fotos = Foto::all();

        return view('foto.index', compact('fotos'));
    }

    public function destacado(Request $request, $id)
    {
        $foto = Foto::findOrFail($id);

        $foto->fav = $request->input('fav');
        $foto->save();

        return redirect()->route('indexFoto');
    }

    public function create()
    {
        return view('foto.create');
    }

    public function store(Request $request)
    {
        $foto = new Foto;

        $foto->titulo = $request->input('titulo');

        if ($request->hasFile('imagen')) $foto->imagen = $request->input('imagen')->store('images', 'public');

        $foto->pais = $request->input('pais');

        $foto->save();

        return redirect()->route('home');
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

        if ($request->hasFile('imagen')) $foto->imagen = $request->file('imagen')->store('images', 'public');

        $foto->save();

        return redirect()->route('home');
    }

    public function destroy($id)
    {
        DB::table('fotos')->delete($id);

        return redirect()->route('home');
    }
}
