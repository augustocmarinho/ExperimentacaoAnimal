<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Animais extends Controller
{
    public function cadastrar()
    {
        return view('animais/cadastrar');
    }
    public function listar()
    {
        return view('animais/listar');
    }
}
