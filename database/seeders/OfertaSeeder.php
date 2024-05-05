<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Oferta;
use Faker\Factory as Faker;

class OfertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) { // Genera 20 ofertas
            $employer = $faker->numberBetween(1, 4);
            $logo = ['../../../assets/imgs/empresas/empresaTec.png', '../../../assets/imgs/empresas/empresaHR.png',
            '../../../assets/imgs/empresas/empresaHost.png', '../../../assets/imgs/empresas/empresaLog.png'];
            Oferta::create([
                'nombre' => $faker->sentence,
                'descripcion' => $faker->paragraph,
                'imagen' => $logo[$employer - 1],
                'publicador' => $employer,
                'sector' => $faker->numberBetween(1, 4), // Números aleatorios entre 1 y 4
            ]);
        }
    }
}
