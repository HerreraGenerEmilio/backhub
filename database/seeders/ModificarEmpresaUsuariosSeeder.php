<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class ModificarEmpresaUsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Recuperar los primeros cuatro usuarios
        $usuarios = User::take(4)->get();

        // Modificar el campo empresa para los primeros cuatro usuarios
        for ($i = 0; $i < 4; $i++) {
            $usuarios[$i]->empresa = ($i+3); // Cambiar por el nombre de la empresa deseada
            $usuarios[$i]->save();
        }

        $this->command->info('Se ha actualizado el campo empresa para los primeros cuatro usuarios.');
    }
}