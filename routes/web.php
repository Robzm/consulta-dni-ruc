<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultaController;

Route::get('/', function () {
    return view('consultar');
});

Route::post('/consulta', [ConsultaController::class, 'consulta'])->name('consulta');





