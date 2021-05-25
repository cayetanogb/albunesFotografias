<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nombre' => 'administrador',
            'rol' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin')
        ]);

        User::create([
            'nombre' => 'cayetano',
            'rol' => 'normal',
            'email' => 'caye@gmail.com',
            'password' => Hash::make('123456')
        ]);
    }
}
