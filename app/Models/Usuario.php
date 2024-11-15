<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Usuario extends Model
{
    protected $table = 'usuarios'; // Nombre de la tabla

    protected $primaryKey = 'id_usuarios'; // Clave primaria

    public $timestamps = false; // Si no usas timestamps

    protected $fillable = [
        'nombre',
        'contrasena',
    ];

    // Mutator para hashear la contraseña antes de guardarla
    public function setContrasenaAttribute($value)
    {
        $this->attributes['contrasena'] = Hash::make($value);
    }
}
