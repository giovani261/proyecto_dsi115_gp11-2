<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'nombre',
        'especialidad',
        'indicaciones',
    ];
    
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    
    public function medicamento() {
        return $this->belongsToMany('App\Models\Medicamento');
    }
}
