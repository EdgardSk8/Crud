<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias'; // Nombre de la tabla

    protected $primaryKey = 'id_categoria'; // Clave primaria

    public $timestamps = false; // Si no usas timestamps (created_at, updated_at)

    protected $fillable = [
        'nombre', // Atributos de la tabla
    ];

}
