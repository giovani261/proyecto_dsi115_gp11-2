<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultaSubsecuente extends Model
{
    use HasFactory;
    protected $fillable = [
        'historial_id',
        'nombre', 
        'presion arterial maxima',
        'temperatura',
        'pulso',
        'peso',
        'imc',
        'presion arterial minima',
        'talla',
        'altura',
    ];

    public function historial(){
        return $this->belongsTo('App\Models\Historial');
    }
}
