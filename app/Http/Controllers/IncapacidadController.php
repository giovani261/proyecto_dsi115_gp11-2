<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use APP\Models\User;
use App\Models\Incapacidad;
use Auth;
use Carbon\Carbon;

class IncapacidadController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function registro(Request $request){
        if(Auth::user()->hasRole(['administrador']))
        {
            try {
                $date = Carbon::now();
                $date = $date->format('Y-m-d');
                $user_id = Auth::user()->id;
                $fechaIncapacidad= request('FechaIncapacidad');
                $nombrePaciente = request('NombredePaciente');
                $diagnosis = request('Diagnosis');
                $medicacion = request('Medicacion');
                $diasIncapacidad = request('DiasIncapacidad');
    
                $incapacidad= new Incapacidad();
            
                $incapacidad->user_id = $user_id;
                $incapacidad->fecha = $fechaIncapacidad;
                $incapacidad->nombre = $nombrePaciente;
                $incapacidad->diagnostico = $diagnosis;
                $incapacidad->tratamiento = $medicacion;
                $incapacidad->dias = $diasIncapacidad;
    
                $incapacidad->save();

                return response()->json(['nombrePaciente' => $nombrePaciente, 'estado' => 'guardado']);
            } catch (Throwable $e) {
                //report($e);
             
                return response()->json(['nombrePaciente' => $nombrePaciente, 'estado' => 'error']);
            }
        }
        else {
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se a cerrado su sesion');
        }

    }
}
