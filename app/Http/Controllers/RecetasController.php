<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetasController extends Controller
{
    public function verrecetas()
    {
        return view('Recetas.indrecetas');
    }

    public function selecRecetas()
    {
        return view('Recetas.selecreceta');
    }
}
