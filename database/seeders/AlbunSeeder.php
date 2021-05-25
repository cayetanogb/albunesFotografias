<?php

namespace Database\Seeders;

use App\Models\Albun;
use Illuminate\Database\Seeder;

class AlbunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Albun::create([
            'titulo' => 'Albun1',
            'pais' => 'España',
            'user_id' => 2
        ]);
    }
}
