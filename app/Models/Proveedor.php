<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\proveedor as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Proveedor extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function incapacidad(){
        return $this->hasMany('App\Models\Incapacidad');
    }

    public function expediente(){
        return $this->hasMany('App\Models\Expediente');
    }

    public function proveedor(){
        return $this->hasMany('App\Models\Proveedor');
    }

    public function referencia(){
        return $this->hasMany('App\Models\Referencia');
    }
    
    public function receta() {
        return $this->hasMany('App\Models\Receta');
    }
    
    public function insumo() {
        return $this->hasMany('App\Models\Insumo');
    }
    
    public function reservaDeCita() {
        return $this->hasMany('App\Models\ReservaDeCita');
    }

}
