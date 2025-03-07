<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function obtenerClima(Request $request)
    {
        $ciudad = $request->query('ciudad', 'Mexico'); 

        $apiKey = env('WEATHER_API_KEY'); 
        $url = "https://api.openweathermap.org/data/2.5/weather?q={$ciudad}&appid={$apiKey}&units=metric&lang=es";

        $respuesta = Http::get($url);

        if ($respuesta->successful()) {
            return response()->json($respuesta->json());
        }

        return response()->json(['error' => 'No se pudo obtener el clima'], $respuesta->status());
    }

    public function obtenerMoneda(Request $request)
    {
        $base = $request->query('base', 'USD'); 
        $destino = $request->query('destino', 'MXN'); 

        $apiKey = env('EXCHANGE_API_KEY'); 
        $url = "https://v6.exchangerate-api.com/v6/{$apiKey}/latest/{$base}";

        $respuesta = Http::get($url);

        if ($respuesta->successful()) {
            $datos = $respuesta->json();
            $tasaCambio = $datos['conversion_rates'][$destino] ?? null;

            if ($tasaCambio) {
                return response()->json([
                    'base' => $base,
                    'destino' => $destino,
                    'tasa' => $tasaCambio
                ]);
            }
        }

        return response()->json(['error' => 'No se pudo obtener el tipo de cambio'], $respuesta->status());
    }
}
