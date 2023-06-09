<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'apellidos',
        'dni',
        'email',
        'fecha_nacimiento',
        'telefono',
        'direccion',
        'cp',
        'ciudad',
        'provincia',
        'pais',
        'password',
        'ruta_imagen'
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function productosValorados() {
        return $this->belongsToMany(Producto::class, 'valoraciones')->withPivot('titulo', 'valoracion', 'coemntario');
    }

    public function comentarios()
    {
        return $this->belongsToMany(Noticia::class, 'comentarios');
    }

    public function pedidos() {
        return $this->hasMany(Pedido::class);
    }
}
