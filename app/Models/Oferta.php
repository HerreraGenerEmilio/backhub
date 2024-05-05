<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;
    
    protected $table = 'oferta';
    
    protected $fillable = ['nombre', 'descripcion', 'imagen', 'publicador', 'sector'];

    public function publicador()
    {
        return $this->belongsTo(User::class, 'publicador');
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class, 'sector');
    }

    public function historiales()
    {
        return $this->hasMany(Historial::class, 'oferta');
    }
}
