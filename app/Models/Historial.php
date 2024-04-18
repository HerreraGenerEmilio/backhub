<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    use HasFactory;

    protected $table = 'historial';
    public function oferta()
    {
        return $this->belongsTo(Oferta::class, 'oferta');
    }

    public function publicador()
    {
        return $this->belongsTo(User::class, 'publicador');
    }

    public function suscriptor()
    {
        return $this->belongsTo(User::class, 'suscriptor');
    }
}
