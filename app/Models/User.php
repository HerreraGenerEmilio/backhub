<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function ofertas()
    {
        return $this->hasMany(Oferta::class, 'publicador');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'empresa');
    }

    public function historialesPublicados()
    {
        return $this->hasMany(Historial::class, 'publicador');
    }

    public function historialesSuscritos()
    {
        return $this->hasMany(Historial::class, 'suscriptor');
    }

    public function isAdmin()
    {
        // Your logic to determine if the user is an admin
        // For example, if you have an 'is_admin' column in your users table:
        if ($this->empresa !== null) {
            return $this->empresa;
        }else{
            return null;
        }
    }
}
