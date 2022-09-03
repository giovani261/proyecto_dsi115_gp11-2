<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'nombre',
        'cantidad',
        'precio',
        'categoria',
    ];
    
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
