<?php

namespace App\Http\Controllers;

use App\Models\AlbunFoto;
use App\Models\Albun;
use App\Models\Foto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbunController extends Controller
{
    public function index()
    {
        $albunes = Albun::where('user_id', auth()->user()->id)->get();

        return view('albun.index', compact('albunes'));
    }

    public function create()
    {
        return view('albun.create');
    }

    public function store(Request $request)
    {
        $albun = new Albun;

        $albun->titulo = $request->input('titulo');

        if ($request->hasFile('portada')) $albun->portada = $request->file('portada')->store('images', 'public');

        $albun->descripcion = $request->input('descripcion');
        $albun->pais = $request->input('pais');

        $user = User::findOrFail(auth()->user()->id);
        $user->albunes()->save($albun);

        return redirect()->route('home');
    }

    public function show($id)
    {
        $albun = Albun::findOrFail($id);
        $fotosAlbun = $albun->fotos;

        return view('albun.show', compact('albun', 'fotosAlbun'));
    }

    public function edit($id)
    {
        $albun = Albun::findOrFail($id);

        return view('albun.edit', compact('albun'));
    }

    public function update(Request $request, $id)
    {
        $albun = Albun::findOrFail($id);

        $albun->titulo = $request->input('titulo');

        if ($request->hasFile('portada')) $albun->portada = $request->file('portada')->store('images', 'public');

        $albun->descripcion = $request->input('descripcion');
        $albun->pais = $request->input('pais');

        $albun->save();
        return redirect()->route('home');
    }

    public function destroy($id)
    {
        DB::table('albuns')->delete($id);

        return redirect()->route('home');
    }

    public function addFoto($id)
    {
        $albun = Albun::findOrFail($id);
        $fotos = Foto::all();

        return view('albun.addFoto', compact('albun', 'fotos'));
    }

    public function storeFoto(Request $request, $id)
    {
        $albunFoto = new AlbunFoto;

        $albunFoto->albun_id = $id;
        $albunFoto->foto_id = $request->input('foto_id');

        $comparar = AlbunFoto::where('albun_id', $albunFoto->albun_id)->where('foto_id', $albunFoto->foto_id)->get();

        if (empty($comparar[0])) {
            $albunFoto->save();
        }

        return redirect()->route('showAlbun', $id);
    }
}
