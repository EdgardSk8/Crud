<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores'; // Nombre de la tabla

    protected $primaryKey = 'id_proveedor'; // Clave primaria

    public $timestamps = false; // Si no usas timestamps

    protected $fillable = [
        'nombre',
        'contacto',
        'telefono',
        'direccion',
    ];

}
