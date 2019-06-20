<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Funcionarios extends Controller
{
    public function cadastrar()
    {
        return view('funcionarios/cadastrar');
    }

    public function listar()
    {
        return view('funcionarios/listar');
    }
}
