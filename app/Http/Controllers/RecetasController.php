<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetasController extends Controller
{
    public function indexrecetas()
    {
        return view('Recetas.verrecetas');
    }

    public function selecRecetas()
    {
        return view('Recetas.selecreceta');
    }
}
