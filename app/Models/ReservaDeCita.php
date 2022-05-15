<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservaDeCita extends Model
{
    use HasFactory;
    protected $table = 'reservas_de_citas';
    protected $fillable = [
        'user_id',
        'nombre',
        'telefono',
        'fecha',
        'hora',
        'especialidad',
    ];
    
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
