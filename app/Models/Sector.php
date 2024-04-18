<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    protected $table = 'sector'; // Especifica el nombre de la tabla si no sigue la convención de nombres de Laravel
    protected $fillable = ['nombre', 'logo']; // Especifica los campos que se pueden asignar en masa (mass assignable)

    public function ofertas()
    {
        return $this->hasMany(Oferta::class, 'sector');
    }

}
