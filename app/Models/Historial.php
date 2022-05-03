<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'expediente_id',
        'fecha de expedicion',
        'fecha de enfermedad actual',
        'fecha de diagnostico',
        'enfermedad actual',
        'examenes prescritos',
        'diagnostico',
        'receta expedida',
        'observaciones',
        'plan medico a seguir',
    ];

    public function expediente(){
        return $this->belongsTo('App\Models\Expediente');
    }
}
