<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Proveedor;
use Illuminate\Support\Facades\Hash;
use Auth;

class proveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasRole(['administrador'])){
            return view('proveedores/index');
        }
        else{
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se a cerrado su sesion');
        }
    }


    public function proveedores_data(){
        if(Auth::user()->hasRole(['administrador']))
        {
            $proveedores = Proveedor::get();
            return datatables($proveedores)->toJson();    
        }
        else {
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se a cerrado su sesion');
        }
    }


    public function create(Request $request)
    {
        if(Auth::user()->hasRole(['administrador']))
        {
            try{
                $nombreProveedor = request('NombreProveedor');
                $proveedor = new Proveedor();
                $proveedor->user_id = Auth::user()->id;
                $proveedor->nombre = $nombreProveedor;
                $proveedor->save();
            }catch (\Exception $e) {
                //report($e); //report error
                return response()->json(['estado' => 'error', 'mensaje' => 'No se pudo crear el proveedor correctamente']);
            }

            return response()->json(['estado' => 'creado']);
        }
        else {
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se a cerrado su sesion');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if(Auth::user()->hasRole(['administrador']))
        {
            try {
                $IdProveedor = request('IdProveedor');
                $NombreProveedor = request('NombreProveedor');

                $Proveedor = Proveedor::findOrFail($IdProveedor);
                $Proveedor->nombre = $NombreProveedor;

                $Proveedor->save();
                return response()->json(['estado' => 'actualizado']);

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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

    }

    public function consultarProveedores(Request $request){
        $IdProveedor = request('IdProveedor');
        if(Auth::user()->hasRole(['administrador'])){
            $proveedor = Proveedor::select('id','nombre')->where('id','=',$IdProveedor)->get();
            return response()->json(['Proveedor' => $proveedor]);
        }
        else{
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se a cerrado su sesion');
        }
    }
}
