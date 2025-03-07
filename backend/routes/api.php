<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\MonedaController;
use App\Http\Controllers\ConsultaController;

Route::get('/consultas', [ConsultaController::class, 'obtenerConsultas']);
Route::get('/clima', [ApiController::class, 'obtenerClima']);
Route::get('/moneda', [MonedaController::class, 'obtenerTipoCambio']);
Route::post('/guardar-consulta', [ConsultaController::class, 'guardarConsulta']);
Route::get('/historial', [ConsultaController::class, 'obtenerHistorial']);
