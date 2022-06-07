<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Usuarios;
use Auth;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasRole(['administrador'])){
            $usuarios = Usuarios::select('id','name','email','created_at', 'updated_at')->get();
            return view('usuarios',compact('usuarios'));
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
            try {
                if(!Auth::guest()){   
                    $user_id = Auth::user()->id;
                }
                else{
                    $user_id = NULL;
                }
                $nombreUsuario = request('nombreUsuario');
                $email = request('email');
                $fechaCreacion = request('fechaCreacion');
                $fechaActualizacion = request('fechaActualizacion');


                $usuarios = new Usuarios();
            
                $usuarios->id = $id;
                $usuarios->name = $nombreUsuario;
                $usuarios->email = $email;
                $usuarios->created_at = $fechaCreacion;
                $usuarios->updated_at = $fechaActualizacion;
                
                $usuarios->save();
                return response()->json(['nombreUsuario' => $nombreUsuario, 'estado' => 'guardado']);
            } catch (Throwable $e) {
                //report($e);
                return response()->json(['nombreUsuario' => $nombreUsuario, 'estado' => 'error']);
            }
    }
    public function usuarios_data(){
        $usuarios = Usuarios::select('id','name','email','created_at', 'updated_at')->orderBy('name')->get();
        return datatables($usuarios)->toJson();    
    }

    public function actualizarUsuarios(Request $request)
    {
        if(Auth::user()->hasRole(['administrador']) || Auth::user()->hasRole(['secretaria']))
        {
            try {
                $id = request('id');               
    
                $usuarios = Usuarios::findOrFail($id);
            
                $usuarios->save();
                return response()->json(['estado' => 'actualizado']);
            } catch (Throwable $e) {
                //report($e); //report error
                return response()->json(['estado' => 'error']);
            }

        }
        else {
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se a cerrado su sesion');
        }

        return redirect('/usuarios');
    }

    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
