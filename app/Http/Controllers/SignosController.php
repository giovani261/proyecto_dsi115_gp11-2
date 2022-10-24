<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConsultaSubsecuente;
use App\Models\Expediente;
use App\Models\User;
use Auth;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class SignosController extends Controller
{
    //    
    public function signos(Request $request){
               
        if(Auth::user()->hasRole(['administrador']))
        {
            try {
                
                $historialid = request('Historialid');
                $presionmax = request('PresionMax');
                $temperatura = request('Temperatura');
                $pulso = request('Pulso');
                $peso = request('Peso');
                $imc = request('IMC');
                $presionmin = request('PresionMin');
                $talla = request('Talla');
                $altura = request('Altura');
    
                $consulta = new ConsultaSubsecuente();
            
                $consulta->historial_id = $historialid;
                $consulta->{"presion arterial maxima"} = $presionmax;
                $consulta->temperatura = $temperatura;
                $consulta->pulso = $pulso;
                $consulta->peso = $peso;
                $consulta->imc = $imc;
                $consulta->{"presion arterial minima"} = $presionmin;
                $consulta->talla = $talla;
                $consulta->altura = $altura;
                
                $consulta->save();
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
    //función para llenar tabla de consultas subsecuentes
    public function signos_informes(){
        //$signos = ConsultaSubsecuente::select('historial_id','presion arterial maxima','temperatura','pulso','peso','imc','presion arterial minima','talla','altura')->get();
            //return response()->json(['reservas' => $reservas]);
            //return $reservas;
            $signos=DB::select('SELECT e.nombre, e.edad,"presion arterial maxima",temperatura,pulso,peso,imc,"presion arterial minima",talla,altura FROM consulta_subsecuente INNER JOIN historiales h ON consulta_subsecuente.historial_id=h.id INNER JOIN expedientes e ON h.expediente_id=e.id');
            return datatables($signos)->toJson();
    }

    //función de gráficos
    public function index()
    {
        if(Auth::user()->hasRole(['administrador'])){
            //$signos = Expediente::select('edad')->get();
            //$signos=ConsultaSubsecuente::select('pulso')->get();
            $signos=DB::select('SELECT e.edad FROM consulta_subsecuente INNER JOIN historiales h ON consulta_subsecuente.historial_id=h.id INNER JOIN expedientes e ON h.expediente_id=e.id');
            return view('signosInforme',['signos' => $signos]);
        }
        else{
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se ha cerrado su sesion');
        }
    }
}