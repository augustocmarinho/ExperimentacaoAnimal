<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Funcionarios extends Controller
{
    public function cadastrar()
    {   
        return view('funcionarios/cadastrar');
    }

    public function store(){
        
        $dados = $_GET;
        $dados['senha']=bcrypt($dados['senha']);
        
        //Imprimindo 1 ou 0
        print_r( DB::table('Funcionarios')->insert($dados));
    }

    public function listar()
    {
        return view('funcionarios/listar');
    }
}
