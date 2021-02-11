<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Ping Pong
Route::get('/ping', function(Request $request) {
    return ['pong'=>true];
});

// Pegar todas as anotações do banco
Route::get('/notes', [NoteController::class, 'all']);

// Pegar infos de uma nota especifica
Route::get('/note/{id}', [NoteController::class, 'one']);

// Criar uma nova nota
Route::post('/note', [NoteController::class, 'new']);

// Editar notas
Route::put('/note/{id}', [NoteController::class, 'edit']);

// Deletar anotações
Route::delete('/note/{id}', [NoteController::class, 'delete']);


