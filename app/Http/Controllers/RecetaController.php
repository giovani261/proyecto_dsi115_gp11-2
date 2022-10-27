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

                
                $receta->medicamentos()->sync($request->medicamentoid);

                return response()->json(['nombrePaciente' => $nombredelPaciente, 'estado' => 'guardado','prueba'=>$request->medicamentoid]);
            } catch (\Exception $e) {
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

    public function recetaajax(){
        $proveedores = Receta::select('nombre','especialidad','indicaciones')->orderBy('nombre')->get();
        return  datatables($proveedores)->toJson();
    }

    public function index()
    {
        if(Auth::user()->hasRole(['administrador'])){
            $recetas = Receta::select('especialidad')->get();
            return view('receta',['recetas' => $recetas]);
        }
        else{
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se ha cerrado su sesion');
        }
    }
}
