<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CKEditorrecetaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function editor()
    {
        return view('editorreceta');
    }
}
