<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NutricionController extends Controller
{
    /*-------------------*/
    /*Formulario*/
    /*-------------------*/

    public function verformedad()
    {
        return view('Nutricion/indedad');
    }

    public function verformmeta()
    {
        return view('Nutricion/indmeta');
    }

    public function verformtipo()
    {
        return view('Nutricion/indtipo');
    }

    public function verformdatosnutricionales()
    {
        return view('Nutricion/inddatosnutri');
    }

    /*-------------------*/
    /*Elección Nutricionista*/
    /*-------------------*/

    public function vernutricionistas()
    {
        return view('Nutricion/indselecnutricionista');
    }

    /*-------------------*/
    /*Vista principal Modulo*/
    /*-------------------*/

    public function vernutricion()
    {
        return view('Nutricion/indnutricion');
    }


}
