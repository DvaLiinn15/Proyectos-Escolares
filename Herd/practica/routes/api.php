<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TitulacionApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Rutas de API para Titulaciones con parámetro 'id'
Route::apiResource('titulaciones', TitulacionApiController::class)
    ->parameters(['titulaciones' => 'id']);

// Ruta adicional POST para actualizar (fallback)
Route::post('titulaciones/{id}/update', [TitulacionApiController::class, 'update']);