<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'nombre',
        'edad',
        'domicilio',
        'responsable',
        'dui paciente',
        'dui responsable',
        'antecedentes patologicos',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function historial(){
        return $this->hasMany('App\Models\Historial');
    }
}
