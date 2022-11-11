<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use APP\Models\User;
use App\Models\Referencia;
use Auth;

class ReferenciaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function guardar_referencia_medica(Request $request) {
        if(Auth::user()->hasRole(['administrador'])) {
            try {
                $referenciapacienteId = Auth::user()->id;
                $referenciaNombre = request('nombre');
                $referenciaRazon = request('razon');
                $referenciaSeLeEnviaA = request('se_le_envia_a');       
            
                $referencia = new Referencia();
           
                $referencia->user_id = $referenciapacienteId;
                $referencia->nombre = $referenciaNombre;
                $referencia->razon = $referenciaRazon;
                $referencia->{"se le envia a"} = $referenciaSeLeEnviaA;
            
                $referencia->save();
            
                return response()->json(['nombrePaciente'=>$referenciaNombre,'estado' => 'guardado']);
            
            } catch (\Exception $e) {
                //report($e);
                return response()->json(['nombrePaciente'=>$referenciaNombre,'estado' => 'error']);
            }
        }
        else {
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una página a la que no tiene permiso, se ha cerrado su sesión');
        }
    }
    
    public function editar_referencia(Request $request) {
        return view('editar-referencia');
    }

    public function consultareferenciasmedicasajax(Request $request) {
        $referencias = Referencia::select('nombre','razon', 'se le envia a')->get();
        return  datatables($referencias)->toJson();
    }
    
    public function index(Request $request) {
        if(Auth::user()->hasRole(['administrador'])){
            $referencias = Referencia::select('se le envia a')->get();
            return view('referencias_medicas_informe',['referencias' => $referencias]);
        }
        else{
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una página para la que no tiene permiso, se ha cerrado su sesión');
        }
    }
}
