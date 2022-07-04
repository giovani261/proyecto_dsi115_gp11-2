<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Historial;
use Auth;
use Carbon\Carbon;

class HistorialController extends Controller
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
                $date = Carbon::now()->timezone('America/El_Salvador');
                $date = $date->format('Y-m-d');
                $expedienteId = request('IdExpediente');
                $fechaExpedicion = $date;
                $fechaEnfermedad = request('FechaEnfermedadActual');
                $fechaDiagnostico = request('FechaDiagnostico');
                $enfermedadActual = request('EnfermedadActual');
                $examenesPrescritos = request('ExamenesPrescritos');
                $diagnostico = request('Diagnostico');
                $recetaExpedida = request('RecetaExpedida');
                $observaciones = request('Observaciones');
                $planMedico = request('PlanMedico');
    
                $historial = new Historial();
            
                $historial->expediente_id = $expedienteId;
                $historial->{"fecha de expedicion"} = $fechaExpedicion;
                $historial->{"fecha de enfermedad actual"} = $fechaEnfermedad;
                $historial->{"fecha de diagnostico"} = $fechaDiagnostico;
                $historial->{"enfermedad actual"} = $enfermedadActual;
                $historial->{"examenes prescritos"} = $examenesPrescritos;
                $historial->diagnostico = $diagnostico;
                $historial->{"receta expedida"} = $recetaExpedida;
                $historial->observaciones = $observaciones;
                $historial->{"plan medico a seguir"} = $planMedico;
                
                $historial->save();
                return response()->json(['estado' => 'guardado']);
            } catch (\Exception $e) {
                //report($e); //report error
                return response()->json(['estado' => 'error']);
            }

        }
        else {
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se a cerrado su sesion');
        }

    }

    public function consultarhistorial(Request $request){
       
        $expedienteid = request('expedienteId');
        $fecha = request('fecha');
        $enfermedad = request('enfermedad');
       
       
        $historialid = Historial::select('id')->where('expediente_id',$expedienteid)->where('fecha de enfermedad actual',$fecha)->where('enfermedad actual',$enfermedad)->get();
        
        
        return response()->json(['historialid' => $historialid]);
   
    }

}
