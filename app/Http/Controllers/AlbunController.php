<?php

namespace App\Http\Controllers;

use App\Models\Albun;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbunController extends Controller
{
    public function index()
    {
        $albunes = Albun::where('user_id', auth()->user()->id);

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
        $albun->descripcion = $request->input('descripcion');
        $albun->pais = $request->input('pais');

        $user = User::findOrFail(auth()->user()->id);
        $user->albunes()->save($albun);

        return view('home');
    }

    public function show($id)
    {
        $albun = Albun::findOrFail($id);

        return view('albun.show', compact('albun'));
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
        $albun->descripcion = $request->input('descripcion');
        $albun->pais = $request->input('pais');

        $albun->save();
        return view('home');
    }

    public function destroy($id)
    {
        DB::table('albuns')->delete($id);

        return view('home');
    }
}
