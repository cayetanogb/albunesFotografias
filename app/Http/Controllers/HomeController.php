<?php

namespace App\Http\Controllers;

use App\Models\Albun;
use App\Models\Foto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $fotos = Foto::sort('created_at');
        $albunes = Albun::sort('created_at');
        $fotosFav = Foto::where('fav', true);

        return view('home', compact('fotos', 'albunes', 'fotosFav'));
    }
}
