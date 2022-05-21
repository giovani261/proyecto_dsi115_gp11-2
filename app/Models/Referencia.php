<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referencia extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'nombre',
        'razon',
        'se le envia a',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
