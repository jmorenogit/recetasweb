<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class recetas_controlador extends Controller
{
    public function inicio(){
        return view ("recetas");
    }

    public function verRecetas(){
        return view ("recetas");
    }

    public function altaRecetas(){
        return view ("altarecetas");
    }

    public function modRecetas(){
        return view ("modrecetas");
    }
    public function borrarRecetas(){
        return view ("borrarrecetas");
    }
}
