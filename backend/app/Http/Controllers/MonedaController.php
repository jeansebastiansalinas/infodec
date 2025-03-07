<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MonedaController extends Controller
{
    public function obtenerTipoCambio(Request $request)
    {
        $base = $request->query('base', 'USD'); // Moneda base por defecto
        $destino = $request->query('destino', 'MXN'); // Moneda destino por defecto

        $apiKey = env('EXCHANGE_API_KEY'); // Usa la clave del .env
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


