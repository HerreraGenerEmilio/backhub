<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfertaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'test';
});

Route::get('/api/ofertas', [OfertaController::class, 'index']);