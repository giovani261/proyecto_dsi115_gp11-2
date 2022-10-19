<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Medicamento;
use App\Models\MedicamentosPrescritos;
use App\Models\Receta;
use Auth;

class MedicamentoController extends Controller
{
    //
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/
    public function medicamentos_data(){
        if(Auth::user()->hasRole(['administrador']))
        {
            $medicamentos = Medicamento::select('id','nombre','precio','cantidad')->orderBy('nombre')->get();
            return datatables($medicamentos)->toJson();    
        }
        else {
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se a cerrado su sesion');
        }
    }
    public function index()
    {
        if(Auth::user()->hasRole(['administrador'])){
            $medicamentos = Medicamento::select('id','nombre','cantidad','precio')->get();
            return view('medicamentos',compact('medicamentos'));
        }
        else{
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se a cerrado su sesion');
        }
    }
  
    public function consultarmedicamentoajax(){
        $medicamentos = Medicamento::select('id','nombre')->orderBy('nombre')->get();
        return response()->json(['medicamentos' => $medicamentos]);
    }

    public function consultarMedicamento(Request $request){
        $IdMedicamento = request('IdMedicamento');
        if(Auth::user()->hasRole(['administrador'])){
            $medicamento = Medicamento::select('id','nombre','cantidad','precio')->where('id','=',$IdMedicamento)->get();
            return response()->json(['Medicamento' => $medicamento]);
        }
        else{
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se a cerrado su sesión');
        }
    }

    public function create(Request $request)
    {
        if(Auth::user()->hasRole(['administrador']))
        {
            try {
                $verificarMedicamento = Medicamento::select('nombre')->where('nombre','=',request('NombreMedicamento'))->get();
                if(!$verificarMedicamento->isEmpty()){
                    return response()->json(['estado' => 'error', 'mensaje' => 'No se pudo registrar el medicamento correctamente, el nombre proporcionado ya existe en nuestros registros']);
                }

                $nombreMedicamento= request('NombreMedicamento');
                $cantidadMedicamento = request('Cantidad');
                $precioMedicamento = request('Precio');

                $medicamento= new Medicamento();
            
                $IdMedicamento = $medicamento->id;
                $medicamento->nombre = $nombreMedicamento;
                $medicamento->cantidad = $cantidadMedicamento;
                $medicamento->precio = $precioMedicamento;
                
                
                $medicamento->save();
                
                return response()->json(['estado' => 'creado']);
            } catch (\Exception $e) {
                //report($e); //report error
                return response()->json(['estado' => 'error', 'mensaje' => 'No se pudo registrar el medicamento correctamente']);
            }
        }
        else {
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se ha cerrado su sesión');
        }
    }
    
    
    public function update(Request $request)
    {
        if(Auth::user()->hasRole(['administrador']))
        {
            try {
                $id = request('IdMedicamento');
                $nombre = request('NombreMedicamento');
                $cantidad = request('CantidadMedicamento');
                $precio = request('PrecioMedicamento');

                $medicamento = Medicamento::findOrFail($id);
                $medicamento->nombre = $nombre;
                $medicamento->cantidad = $cantidad;
                $medicamento->precio = $precio;

                $medicamento->save();
                return response()->json(['estado' => 'actualizado']);

            } catch (\Exception $e) {
                //report($e); //report error
                return response()->json(['estado' => 'error']);
            }
        }
        else {
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se ha cerrado su sesión');
        }
    }

    public function destroy(Request $request)
    {
        //
        if(Auth::user()->hasRole(['administrador'])){
            try{
                $id = request('IdMedicamento');
                $medicamento = Medicamento::findOrFail($id);
                $medicamento->delete();
                $medicamento->recetas()->detach($request->id);
                return response()->json(['estado' => 'error']);
            }catch(\Exception $e){
                return response()->json(['estado' => 'eliminado']);
            }
        }
        else {
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se ha cerrado su sesión');
        }
    }
}

