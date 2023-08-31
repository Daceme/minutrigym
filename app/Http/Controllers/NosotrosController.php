<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    public function vernosotros()
    {
        return view('Home\indnosotros');
    }
}
