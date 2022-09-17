<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Expediente;
use Auth;

class ExpedienteController extends Controller
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
                $user_id = Auth::user()->id;
                $nombrePaciente = request('NombrePaciente');
                $edad = request('Edad');
                $domicilio = request('Domicilio');
                $responsable = request('Responsable');
                $duiResponsable = request('DuiResponsable');
                $duiPaciente = request('DuiPaciente');
                $antecedentes = request('Antecedentes');

                $expediente = new Expediente();
            
                $expediente->user_id = $user_id;
                $expediente->nombre = $nombrePaciente;
                $expediente->edad = $edad;
                $expediente->domicilio = $domicilio;
                $expediente->responsable = $responsable;
                $expediente->{"dui paciente"} = $duiPaciente;
                $expediente->{"dui responsable"} = $duiResponsable;
                $expediente->{"antecedentes patologicos"} = $antecedentes;
                
                $expediente->save();
                return response()->json(['nombrePaciente' => $nombrePaciente, 'estado' => 'guardado']);
            } catch (\Exception $e) {
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

    public function consultarajax(){
        $expedientes = Expediente::select('id','nombre','dui paciente')->orderBy('nombre')->get();
        return response()->json(['expedientes' => $expedientes]);
    }

    public function pacienteajax(){
        $expedientes = Expediente::select('nombre','edad','domicilio','responsable','dui paciente','dui responsable', 'antecedentes patologicos')->orderBy('nombre')->get();
        return  datatables($expedientes)->toJson();
    }

    public function index()
    {
        if(Auth::user()->hasRole(['administrador'])){
            $expedientes = Expediente::select('edad')->get();
            return view('pacientesinforme',['expedientes' => $expedientes]);
        }
        else{
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se ha cerrado su sesion');
        }
    }
}
