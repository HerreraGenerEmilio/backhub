<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SectorController;

Route::get('/', function () {
    return redirect('http://localhost:4200');
});

//Ofertas
Route::get('/api/ofertas', [OfertaController::class, 'page']);
Route::post('/api/ofertas2', [OfertaController::class, 'store']);
Route::put('/api/ofertas', [OfertaController::class, 'update']);
Route::delete('/api/ofertas/{id}', [OfertaController::class, 'destroy']);
Route::get('/api/ofertas/{id}', [OfertaController::class, 'show']);
//adicionales
Route::get('/api/ofertasUser', [OfertaController::class, 'user']);
Route::get('/api/ofertasImg', [OfertaController::class, 'img']);
Route::get('/api/ofertasPublicador', [OfertaController::class, 'publi']);
//Sectores
Route::get('/api/sectores', [SectorController::class, 'index']);
Route::get('/api/sectores/{id}', [SectorController::class, 'show']);

Route::get('/api/token', [OfertaController::class, 'token']);

Route::get('/api/check-auth-status', [AuthController::class, 'checkAuthStatus']);
Route::get('/api/logoutt', [AuthController::class, 'logoutt']);

Route::get('/dashboard', function () {
    return redirect('http://localhost:4200');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
