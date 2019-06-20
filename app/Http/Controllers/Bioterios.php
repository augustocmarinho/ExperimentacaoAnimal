<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bioterios extends Controller
{
    public function cadastrar()
    {
        return view('bioterios/cadastrar');
    }

    public function listar()
    {
        return view('bioterios/listar');
    }
}
