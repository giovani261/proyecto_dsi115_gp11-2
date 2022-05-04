<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'receta_id',
        'nombre',
        'especialidad',
        'indicaciones',
    ];
    
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    
    public function medicamento() {
        return $this->belongsTo('App\Models\Medicamento');
    }
}
