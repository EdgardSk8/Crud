<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\LoginController;


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/productos', [ProductoController::class, 'index'])->name('productos');

Route::post('/login', [UsuarioController::class, 'login']); 


Route::get('/usuarios', [UsuarioController::class, 'MostrarUsuarios']);
Route::post('/usuarios', [UsuarioController::class, 'AgregarUsuarios']);
Route::put('/usuarios/{id}', [UsuarioController::class, 'EditarUsuarios']);
Route::delete('/usuarios/{id}', [UsuarioController::class, 'EliminarUsuarios']);






