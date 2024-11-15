<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    // Mostrar todos los usuarios
    public function MostrarUsuarios()
    {
        $usuarios = Usuario::all();
        return response()->json($usuarios);
    }

    // Agregar un nuevo usuario
    public function AgregarUsuarios(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'contrasena' => 'required|string|min:3',
        ]);

        // Crear el usuario asegurando que la contraseña esté hasheada
        $usuario = Usuario::create([
            'nombre' => $request->nombre,
            'contrasena' => Hash::make($request->contrasena),  // Hashear la contraseña
        ]);

        return response()->json(['message' => 'Usuario agregado exitosamente', 'usuario' => $usuario]);
    }

    // Editar un usuario existente
    public function EditarUsuarios(Request $request, $id)
    {
        // Validación de los datos del formulario
        $request->validate([
            'nombre' => 'sometimes|required|string|max:255',
            'contrasena' => 'sometimes|required|string|min:6',
        ]);

        // Buscar al usuario por su ID
        $usuario = Usuario::findOrFail($id);
        
        // Actualizar el nombre si se proporcionó
        if ($request->has('nombre')) {
            $usuario->nombre = $request->nombre;
        }
        
        // Actualizar la contraseña si se proporcionó, asegurando que se guarde de forma segura
        if ($request->has('contrasena')) {
            $usuario->contrasena = Hash::make($request->contrasena);  // Hashear la contraseña
        }
        
        // Guardar los cambios
        $usuario->save();

        return response()->json(['message' => 'Usuario actualizado exitosamente', 'usuario' => $usuario]);
    }

    // Eliminar un usuario
    public function EliminarUsuarios($id)
    {
        // Buscar al usuario por su ID
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return response()->json(['message' => 'Usuario eliminado exitosamente']);
    }

}
