<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Insumo;
use Auth;

class InsumoController extends Controller
{
    public function insumos_data(){
        if(Auth::user()->hasRole(['administrador']))
        {
            $insumos = Insumo::select('id','user_id','nombre','cantidad','precio','categoria')->orderBy('nombre')->get();
            return datatables($insumos)->toJson();    
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
            $insumos = Insumo::select('id','user_id','nombre','cantidad','precio','categoria')->get();
            return view('insumos',compact('insumos'));
        }
        else{
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se a cerrado su sesion');
        }
    }

    public function index_informes()
    {
        if(Auth::user()->hasRole(['administrador'])){
            $insumos = Insumo::select('nombre','cantidad','precio','categoria')->get();
            return view('insumosInforme',['insumos' => $insumos]);
        }
        else{
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se ha cerrado su sesion');
        }
    }
    
    public function insumos_ajax(){
        $insumos = Insumo::select('nombre','cantidad','precio','categoria')->get();
        //return response()->json(['reservas' => $reservas]);
        //return $reservas;
        return datatables($insumos)->toJson();
    }

    public function consultarinsumoajax(){
        $insumos = Insumo::select('id','nombre')->orderBy('nombre')->get();
        return response()->json(['insumos' => $insumos]);
    }

    public function consultarInsumo(Request $request){
        $IdInsumo = request('IdInsumo');
        if(Auth::user()->hasRole(['administrador'])){
            $insumo = Insumo::select('id','user_id','nombre','cantidad','precio','categoria')->where('id','=',$IdInsumo)->get();
            return response()->json(['Insumo' => $insumo]);
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
                $verificarInsumo = Insumo::select('nombre')->where('nombre','=',request('NombreInsumo'))->get();
                if(!$verificarInsumo->isEmpty()){
                    return response()->json(['estado' => 'error', 'mensaje' => 'No se pudo registrar el insumo correctamente, el nombre proporcionado ya existe en nuestros registros']);
                }
                $insumoId = Auth::user()->id;
                $nombreInsumo= request('NombreInsumo');
                $cantidadInsumo = request('Cantidad');
                $precioInsumo = request('Precio');
                $categoriaInsumo= request('CategoriaInsumo');

                $insumo= new Insumo();
            
               // $IdInsumo = $insumo->id;
                $insumo->user_id = $insumoId;
                $insumo->nombre = $nombreInsumo;
                $insumo->cantidad = $cantidadInsumo;
                $insumo->precio = $precioInsumo;
                $insumo->categoria = $categoriaInsumo;
                
                $insumo->save();
                
                return response()->json(['estado' => 'creado']);
            } catch (\Exception $e) {
                //report($e); //report error
                return response()->json(['estado' => 'error', 'mensaje' => 'No se pudo registrar el insumo correctamente']);
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
                $id = request('IdInsumo');
                $nombre = request('NombreInsumo');
                $cantidad = request('CantidadInsumo');
                $precio = request('PrecioInsumo');
                $categoria = request('CategoriaInsumo');

                $insumo = Insumo::findOrFail($id);
                $insumo->nombre = $nombre;
                $insumo->cantidad = $cantidad;
                $insumo->precio = $precio;
                $insumo->categoria = $categoria;

                $insumo->save();
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

}

