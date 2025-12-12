<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitulacionesController;

Route::get('/', function () {
    return view('layouts.app');
});

// Rutas para Titulaciones
Route::get('/titulaciones', [TitulacionesController::class, 'index'])->name('titulaciones.index');
Route::get('/titulaciones/create', [TitulacionesController::class, 'create'])->name('titulaciones.create');
Route::post('/titulaciones', [TitulacionesController::class, 'store'])->name('titulaciones.store');
Route::get('/titulaciones/{id}/edit', [TitulacionesController::class, 'edit'])->name('titulaciones.edit');
Route::put('/titulaciones/{id}', [TitulacionesController::class, 'update'])->name('titulaciones.update');
Route::delete('/titulaciones/{id}', [TitulacionesController::class, 'destroy'])->name('titulaciones.destroy');
Route::get('/titulaciones/{id}', [TitulacionesController::class, 'show'])->name('titulaciones.show');

route::resource('titulaciones', TitulacionesController::class);
Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');
});

//require __DIR__.'/auth.php';