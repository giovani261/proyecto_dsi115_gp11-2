<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CKEditorrecetaController extends Controller
{
    public function editor()
    {
        return view('editorreceta');
    }
}
