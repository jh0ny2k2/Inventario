<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localizacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'ciudad',
        'nombreEdificio',
        'direccionEdificio',
        'numeroSala',
    ];

    public function productos()
    {
        return $this->hasMany(Producto::class);


    }
}
