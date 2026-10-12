<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoria_id',
        'codigo',
        'nombre',
        'descripcion',
        'marca',
        'precio_dia',
        'estado'
    ];

    public function categoria()
    {
       return $this->belongsTo(Categoria::class);
    }

    public function alquilerDetalles()
    {
        return $this->hasMany(AlquilerDetalle::class);
    }
}