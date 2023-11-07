<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeusuarioController extends Controller
{
    public function verhomeusuario()
    {
        return view('HomeUsuario/indhomeusuario');
    }

    public function verinicio()
    {
        return view('Inicio/indinicio');
    }

    public function verrecetas()
    {
        return view('Recetas/indrecetas');
    }

    public function verperfil()
    {
        return view('Perfil/indperfil');
    }
}
