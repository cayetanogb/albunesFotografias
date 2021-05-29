<?php

namespace Database\Seeders;

use App\Models\Foto;
use Illuminate\Database\Seeder;

class FotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Foto::create([
            'titulo' => 'campo',
            'pais' => 'España',
            'imagen' => 'images/1.jpg',
            'fav' => false
        ]);

        Foto::create([
            'titulo' => 'guepardo',
            'pais' => 'Argelia',
            'imagen' => 'images/2.jpg',
            'fav' => true
        ]);

        Foto::create([
            'titulo' => 'paisaje',
            'pais' => 'Finlandia',
            'imagen' => 'images/3.jpg',
            'fav' => true
        ]);

        Foto::create([
            'titulo' => 'calle blanco y negro',
            'pais' => 'Inglaterra',
            'imagen' => 'images/6.jpg',
            'fav' => false
        ]);
    }
}
