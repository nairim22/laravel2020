<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $fillable = ['nombre_rol', 'descripcion_rol', 'estado_rol' ];
}
