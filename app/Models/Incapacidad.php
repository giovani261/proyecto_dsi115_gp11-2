<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incapacidad extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $table="incapacidades";
    protected $fillable = [
        'user_id',
        'fecha',
        'nombre',
        'diagnostico',
        'tratamiento',
        'dias',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
