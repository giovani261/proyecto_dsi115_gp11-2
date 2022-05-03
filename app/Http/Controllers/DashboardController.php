<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Auth;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(Request $request){
        // if (session()->get('nombre')){
        //     $nombre = session()->get('nombre');
        //     Alert::success('Success Title', $nombre);
        // }
        // else {
        //     Alert::error('Success Title', "No se ha guardado el signo vital");
        // }
        if(Auth::user()->hasRole(['administrador']))
        {

            return view('dashboard');
        }
        else {
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se a cerrado su sesion');
        }
        
    }

    public function roles(){
        //creacion rol de admin
        //$role_admin = Role::create(['name' => 'administrador']);
        //$permission_admin = Permission::create(['name' => 'acceso total']);
        //$role_admin->givePermissionTo($permission_admin);
        //User::find(1)->givePermissionTo('acceso total');
        //User::find(1)->assignRole('administrador');
        //dd(User::find(1)->can('acceso total'));
        //creacion rol de secretaria
        //$role_secretaria = Role::create(['name' => 'secretaria']);
        // $permission_secretaria = Permission::create(['name' => 'agendar citas', 'name' => 'gestion de insumos', 'name' => 'gestion de medicamentos']);
        // $role_secretaria->givePermissionTo($permission_secretaria);
        //User::find(3)->assignRole('secretaria');
        //creacion rol de asistente
        $role_asistente = Role::create(['name' => 'asistente']);
        User::find(4)->assignRole('asistente');
        //return "hecho";
    }
}
