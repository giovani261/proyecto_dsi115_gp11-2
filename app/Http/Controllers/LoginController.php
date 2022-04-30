<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    //
    public function logout(){
        return route('login');
    }
}
