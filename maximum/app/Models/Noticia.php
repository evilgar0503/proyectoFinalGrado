<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'cuerpo'
    ];

    public function comentarios()
    {
        return $this->belongsToMany(User::class, 'comentarios')->withPivot('contenido', 'created_at');
    }
}
