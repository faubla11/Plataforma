<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login',[AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function(){
    Route::get('/user-profile', [AuthController::class, 'profile']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'index']);
});


//ruta para obtener el total de usuarios de la tabla usuarios
Route:: get('/user', [UsuarioController::class,'index']);
// buscar un usuario por ID
Route:: get('/user/{id}', [UsuarioController::class,'registroUser']);
// registar un nuevo usuario
Route:: post('/user', [UsuarioController::class,'store']);

// Actualizar un usuario existente por ID
Route::put('/user/{id}', [UsuarioController::class, 'update']);
// Eliminar un usuario existente por ID
Route::delete('/user/{id}', [UsuarioController::class, 'destroy']);
