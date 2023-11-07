<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiProgresoController extends Controller
{
    public function vermiprogreso()
    {
        return view('MiProgreso/indmiprogreso');
    }

    public function vercalendario()
    {
        return view('MiProgreso/indcalendario');
    }
}
