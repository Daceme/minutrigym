<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeusuarioController extends Controller
{
    public function verhomeusuario()
    {
        return view('HomeUsuario/indhomeusuario');
    }
}
