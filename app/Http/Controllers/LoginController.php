<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function verlogin()
    {
        return view('Login.indlogin');
    }

    public function verregister()
    {
        
        return view ('Login.indregister');
    }
    
}
