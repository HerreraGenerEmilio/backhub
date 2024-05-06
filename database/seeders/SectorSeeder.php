<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sector;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertar datos de ejemplo para el sector
        Sector::create([
            'nombre' => 'IT',
            'logo' => '../../../assets/imgs/sectores/IT.png',
        ]);

        Sector::create([
            'nombre' => 'Recursos Humanos',
            'logo' => '../../../assets/imgs/sectores/HR.png',
        ]);

        Sector::create([
            'nombre' => 'Hostelería',
            'logo' => '../../../assets/imgs/sectores/Host.png',
        ]);

        Sector::create([
            'nombre' => 'Logística y paquetería',
            'logo' => '../../../assets/imgs/sectores/Log.png',
        ]);
        // Añade más sectores según tus necesidades...
    }
}