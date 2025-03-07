<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;

class ConsultaController extends Controller {

    public function obtenerHistorial()
{
    return response()->json(Consulta::latest()->get());
}
    public function guardarConsulta(Request $request) {
        
        $request->validate([
            'ciudad' => 'required|string',
            'moneda_base' => 'required|string',
            'moneda_destino' => 'required|string',
            'tasa' => 'required|numeric',
            'presupuesto' => 'required|numeric|min:1',
            'monto_convertido' => 'required|numeric',
            'temperatura' => 'required|numeric',
            'humedad' => 'required|integer',
        ]);

       
        $consulta = Consulta::create($request->all());

        
        return response()->json([
            'mensaje' => 'Consulta guardada correctamente',
            'consulta' => $consulta
        ], 201);
    }
}
