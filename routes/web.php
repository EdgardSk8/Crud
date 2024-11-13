<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/usuarios', [UsuarioController::class, 'MostrarUsuarios']);
Route::post('/usuarios', [UsuarioController::class, 'AgregarUsuarios']);
Route::put('/usuarios/{id}', [UsuarioController::class, 'EditarUsuarios']);
Route::delete('/usuarios/{id}', [UsuarioController::class, 'EliminarUsuarios']);
