<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Oferta;

class OfertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Oferta::create([
            'nombre' => 'Oferta1',
            'descripcion' => 'Descubre las últimas tecnologías con nuestra Oferta1. ¡No te la pierdas!',
            'imagen' => '../../../assets/imgs/empresas/empresaTec.png',
            'publicador' => 1,
            'sector' => 1,
        ]);

        Oferta::create([
            'nombre' => 'Oferta2',
            'descripcion' => 'Explora nuevas oportunidades con la Oferta2 de Empresa2. ¡Inscríbete ahora!',
            'imagen' => '../../../assets/imgs/empresas/empresaHR.png',
            'publicador' => 2,
            'sector' => 2,
        ]);

        Oferta::create([
            'nombre' => 'Oferta3',
            'descripcion' => 'Disfruta de experiencias únicas con la Oferta3 de Empresa3. ¡Ven y únete a nosotros!',
            'imagen' => '../../../assets/imgs/empresas/empresaHosteleria.png',
            'publicador' => 3,
            'sector' => 3,
        ]);

        Oferta::create([
            'nombre' => 'Oferta4',
            'descripcion' => 'Optimiza tu logística con la Oferta4 de Empresa4. ¡No esperes más!',
            'imagen' => '../../../assets/imgs/empresas/empresaLog.png',
            'publicador' => 4,
            'sector' => 4,
        ]);
    }
}
