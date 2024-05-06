<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertar datos de ejemplo para los usuarios
        User::create([
            'name' => 'Admin1',
            'email' => 'admin1@example.com',
            'password' => Hash::make('password'),
        ]);
    
        User::create([
            'name' => 'Admin2',
            'email' => 'admin2@example.com',
            'password' => Hash::make('password'),
        ]);
    
        User::create([
            'name' => 'Admin3',
            'email' => 'admin3@example.com',
            'password' => Hash::make('password'),
        ]);
    
        User::create([
            'name' => 'Admin4',
            'email' => 'admin4@example.com',
            'password' => Hash::make('password'),
        ]);
    
        // Agregamos dos usuarios más
        User::create([
            'name' => 'Manolo',
            'email' => 'manolo@example.com',
            'password' => Hash::make('password'),
        ]);
    
        User::create([
            'name' => 'Tomás',
            'email' => 'tomas@example.com',
            'password' => Hash::make('password'),
        ]);
    
        // Añade más usuarios según tus necesidades...
    }
}
