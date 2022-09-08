<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
            $proveedores = User::select('id','name','email','created_at', 'updated_at')->get();
            return view('proveedores',compact('proveedores'));
        }
        else{
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se a cerrado su sesion');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registro(Request $request){
                
    }
    public function proveedores_data(){
        if(Auth::user()->hasRole(['administrador']))
        {
            $proveedores = User::select('id','name','email','created_at', 'updated_at')->orderBy('name')->get();
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
            try {
                $correoVerificacion = User::select('email')->where('email','=',request('CorreoProveedor'))->get();
                if(!$correoVerificacion->isEmpty()){
                    return response()->json(['estado' => 'error', 'mensaje' => 'No se pudo crear el proveedor correctamente, el correo proporcionado ya existe en nuestros registros']);
                }

                $Contra = request('ContraseñaProveedor');
                $ContraConfirm = request('ContraseñaConfirmProveedor');

                if(strcmp($Contra, $ContraConfirm) !== 0){
                    return response()->json(['estado' => 'error', 'mensaje' => 'No se pudo crear el proveedor correctamente, las contraseñas ingresadas no coinciden']);
                }

                $user = User::create([
                    'name' => request('NombreProveedor'),
                    'email' => request('CorreoProveedor'),
                    'password' => Hash::make(request('ContraseñaProveedor')),
                ]);

                $IdProveedor = $user->id;
                $RolesAssign = request('RolesAssign');

                if(!empty($RolesAssign)){
                    foreach($RolesAssign as $rolAssign){
                        User::find($IdProveedor)->assignRole($rolAssign);
                    }
                }
                return response()->json(['estado' => 'creado']);
            } catch (\Exception $e) {
                //report($e); //report error
                return response()->json(['estado' => 'error', 'mensaje' => 'No se pudo crear el proveedor correctamente']);
            }
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
                $CorreoProveedor = request('CorreoProveedor');
                $RolesAssign = request('RolesAssign');
                $RolesUnassign = request('RolesUnassign');

                $Proveedor = User::findOrFail($IdProveedor);
                $Proveedor->name = $NombreProveedor;
                $Proveedor->email = $CorreoProveedor;

                if(!empty($RolesAssign)){
                    foreach($RolesAssign as $rolAssign){
                        User::find($IdProveedor)->assignRole($rolAssign);
                    }
                }
                if(!empty($RolesUnassign)){
                    foreach($RolesUnassign as $rolUnassign){
                        User::find($IdProveedor)->removeRole($rolUnassign);
                    }
                }
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
        //
        if(Auth::user()->hasRole(['administrador'])){
            try{
                User::find(request('IdProveedor'))->delete();
                return response()->json(['estado' => 'eliminado']);
            }catch(\Exception $e){
                return response()->json(['estado' => 'error']);
            }
        }
        else {
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se a cerrado su sesion');
        }
    }

    public function consultarProveedor(Request $request){
        $IdProveedor = request('IdProveedor');
        if(Auth::user()->hasRole(['administrador'])){
            $proveedor = User::select('id','name','email','created_at', 'updated_at')->where('id','=',$IdProveedor)->with('roles')->get();
            return response()->json(['Proveedor' => $proveedor]);
        }
        else{
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se a cerrado su sesion');
        }
    }
}
