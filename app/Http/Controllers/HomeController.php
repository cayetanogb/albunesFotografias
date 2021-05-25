<?php

namespace App\Http\Controllers;

use App\Models\Albun;
use App\Models\Foto;

class HomeController extends Controller
{
    public function index()
    {
        $albunes = Albun::all();
        $fotos = Foto::where('fav', 1);

        return view('home', compact('albunes', 'fotos'));
    }
}
