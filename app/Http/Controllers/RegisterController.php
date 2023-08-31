<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function verregister()
    {
        return view('Home/indregister');
    }
}
