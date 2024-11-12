<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios'; // Nombre de la tabla

    protected $primaryKey = 'id_usuarios'; // Clave primaria

    public $timestamps = false; // Si no usas timestamps

    protected $fillable = [
        'nombre',
        'contrasena',
    ];
}
