<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        // Aquí puedes pasar datos de los productos si es necesario
        return view('productos');
    }
}
