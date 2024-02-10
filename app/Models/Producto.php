<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'modelo',
        'fabricante',
        'descripcion',
        'imagen',
        'stock',
        'estado',
        'localizaciones_id'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function localizacion()
    {
        return $this->belongsTo(Localizacion::class);
    }
}
