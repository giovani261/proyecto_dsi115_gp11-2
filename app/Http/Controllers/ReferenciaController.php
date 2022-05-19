<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Referencia;

class ReferenciaController extends Controller
{
    public function guardarReferenciaMedica() {
        if(Auth::user()->hasRole(['administrador'])) {
            try {
                $referenciaId = request('user_id');
                $referenciaNombre = request('nombre');
                $referenciaRazon = request('razon');
                $referenciaSeLeEnviaA = request('se le envia a');   
            
                $referencia = new Referencia();
           
                $referencia->user_id = $referenciaId;
                $referencia->nombre = $referenciaNombre;
                $referencia->razon = $referenciaNombre;
                $referencia->{"se le envia a"} = $referenciaSeLeEnviaA;
            
                $referencia->save();
            
                return response()->json(['estado' => 'guardado']);
            
            } catch (Throwable $e) {
                //report($e);
                return response()->json(['estado' => 'error']);
            }
        }
        else {
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una página a la que no tiene permiso, se ha cerrado su sesión');
        }
    }
    
    public function editar_referencia() {
        return view('editar-referencia');
    }
}
