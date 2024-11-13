<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function MostrarUsuarios(){
        $usuarios = Usuario::all();
        return response()->json($usuarios);
    }

    public function AgregarUsuarios(Request $request){

        $request->validate([
            'nombre' => 'required|string|max:255',
            'contrasenia' => 'required|string|min:3'
        ]);

        $usuario = Usuario::create([
            'nombre' => $request->nombre,
            'contrasenia' => ($request->contrasenia)
        ]);

        return response()->json(['message' => 'Usuario agregado exitosamente', 'usuario' => $usuario]);
    }

    public function EditarUsuarios(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'sometimes|required|string|max:255',
            'contrasena' => 'sometimes|required|string|min:6',
        ]);

        $usuario = Usuario::findOrFail($id);
        if ($request->has('nombre')) {
            $usuario->nombre = $request->nombre;
        }
        if ($request->has('contrasena')) {
            $usuario->contrasena = ($request->contrasena);
        }
        $usuario->save();

        return response()->json(['message' => 'Usuario actualizado exitosamente', 'usuario' => $usuario]);
    }

    public function EliminarUsuarios($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return response()->json(['message' => 'Usuario eliminado exitosamente']);
    }

}
