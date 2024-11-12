<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos'; // Nombre de la tabla

    protected $primaryKey = 'id_producto'; // Clave primaria

    public $timestamps = false; // Si no usas timestamps

    protected $fillable = [
        'nombre', 
        'descripcion', 
        'precio', 
        'stock', 
        'id_categoria', 
        'id_proveedor',
    ];

    // Relación con la tabla 'categorias'
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

    // Relación con la tabla 'proveedores'
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'id_proveedor');
    }

}
