<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empresa;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertar datos de ejemplo para las empresas
        Empresa::create([
            'nombre' => 'Empresa1',
            'descripcion' => 'Descripción de la Empresa1',
            'logo' => '../../../assets/imgs/empresas/empresaTec.png',
            'admin' => 6, // ID del usuario administrador
        ]);

        Empresa::create([
            'nombre' => 'Empresa2',
            'descripcion' => 'Descripción de la Empresa2',
            'logo' => '../../../assets/imgs/empresas/empresaHR.png',
            'admin' => 7, // ID del usuario administrador
        ]);

        Empresa::create([
            'nombre' => 'Empresa3',
            'descripcion' => 'Descripción de la Empresa3',
            'logo' => '../../../assets/imgs/empresas/empresaHost.png',
            'admin' => 8, // ID del usuario administrador
        ]);

        Empresa::create([
            'nombre' => 'Empresa4',
            'descripcion' => 'Descripción de la Empresa4',
            'logo' => '../../../assets/imgs/empresas/empresaLog.png',
            'admin' => 9, // ID del usuario administrador
        ]);
    }
}
