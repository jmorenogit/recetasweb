<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class recetas_controlador extends Controller
{
    public function inicio(){
        return view ("menu");
    }
}
