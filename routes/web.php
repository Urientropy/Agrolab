<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Http\Fincas\FincasIndex;
use App\Livewire\Http\Fincas\CrearFinca;
use App\Livewire\Http\Fincas\EditarFinca;

Route::view('/', 'welcome');

Route::middleware(['auth', 'verified'])->group(function () { // Inicio del grupo con autenticación
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('profile', 'profile')->name('profile');
    
    // Ruta para el módulo de Fincas
    Route::get('/fincas', FincasIndex::class)->name('fincas.index');
    Route::get('/fincas/crear', CrearFinca::class)->name('fincas.crear');
    Route::get('/editar-finca/{fincaId}', EditarFinca::class)->name('editar-finca');

    
}); // Fin del grupo con autenticación 

require __DIR__.'/auth.php'; 
