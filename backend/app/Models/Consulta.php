<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model {
    use HasFactory;

    protected $fillable = [
        'ciudad',
        'moneda_base',
        'moneda_destino',
        'tasa',
        'presupuesto',
        'monto_convertido',
        'temperatura',
        'humedad'
    ];
}
