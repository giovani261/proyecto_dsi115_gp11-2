<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Medicamento;

class Receta extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $table="recetas";
    protected $fillable = [
        'user_id',
        'nombre',
        'especialidad',
        'indicaciones',
    ];
    
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    
    public function medicamentos() {
        return $this->belongsToMany(Medicamento::class,'medicamentos_prescritos','receta_id','medicamento_id');
    }
}
