<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use APP\Models\User;
use App\Models\Receta;
use App\Models\Medicamento;
use Auth;

class RecetaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function registro(Request $request){
        //return $request;
        if(Auth::user()->hasRole(['administrador']))
        {
            try {
                //return $request;
                $user_id = Auth::user()->id;
                $nombredelPaciente= request('nombredelpaciente');
                $especialidadMedica = request('especialidadmedica');
                $indicacionesPaciente = request('indicacionespaciente');
    
                $receta= new Receta();
            
                $receta->user_id = $user_id;
                $receta->nombre = $nombredelPaciente;
                $receta->especialidad = $especialidadMedica;
                $receta->indicaciones = $indicacionesPaciente;
                
                
                $receta->save();

                
                $receta->medicamentos()->attach($request->medicamentoid);

                return response()->json(['nombrePaciente' => $nombredelPaciente, 'estado' => 'guardado','prueba'=>$request->medicamentoid]);
            } catch (Throwable $e) {
                //report($e);
             
                return response()->json(['nombrePaciente' => $nombredelPaciente, 'estado' => 'error']);
            }
        }
        else {
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se a cerrado su sesion');
        }

    }
}
