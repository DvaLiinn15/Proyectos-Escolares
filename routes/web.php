<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitulacionesController;

Route::get('/', function () {
    return view('layouts.app');
});

<<<<<<< HEAD
// Rutas para Titulaciones
Route::get('/titulaciones', [TitulacionesController::class, 'index'])->name('titulaciones.index');
Route::get('/titulaciones/create', [TitulacionesController::class, 'create'])->name('titulaciones.create');
Route::post('/titulaciones', [TitulacionesController::class, 'store'])->name('titulaciones.store');
Route::get('/titulaciones/{id}/edit', [TitulacionesController::class, 'edit'])->name('titulaciones.edit');
Route::put('/titulaciones/{id}', [TitulacionesController::class, 'update'])->name('titulaciones.update');
Route::delete('/titulaciones/{id}', [TitulacionesController::class, 'destroy'])->name('titulaciones.destroy');
Route::get('/titulaciones/{id}', [TitulacionesController::class, 'show'])->name('titulaciones.show');

route::resource('titulaciones', TitulacionesController::class);
=======
// Rutas completas para Titulaciones
Route::get('/titulaciones', [TitulacionesController::class, 'index'])->name('titulaciones.index');
Route::get('/titulaciones/create', [TitulacionesController::class, 'create'])->name('titulaciones.create');
Route::post('/titulaciones', [TitulacionesController::class, 'store'])->name('titulaciones.store');
Route::get('/titulaciones/{id}', [TitulacionesController::class, 'show'])->name('titulaciones.show');
Route::get('/titulaciones/{id}/edit', [TitulacionesController::class, 'edit'])->name('titulaciones.edit');
Route::put('/titulaciones/{id}', [TitulacionesController::class, 'update'])->name('titulaciones.update');
Route::delete('/titulaciones/{id}', [TitulacionesController::class, 'destroy'])->name('titulaciones.destroy');

>>>>>>> 1f12e9d397c5bc6da41e148a08dcaed57bdc64e0
Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');
});

<<<<<<< HEAD
//require __DIR__.'/auth.php';
=======
require __DIR__.'/auth.php';
>>>>>>> 1f12e9d397c5bc6da41e148a08dcaed57bdc64e0
