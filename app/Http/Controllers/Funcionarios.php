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
        unset($dados['senhaConfirm']);
        //Imprimindo 1 ou 0
        $result['result'] = DB::table('Funcionarios')->insert($dados);


        $funcionarios['funcionarios'] = DB::table('Funcionarios')->get();
        
        return view('funcionarios/listar',$funcionarios,$result);
    }

    public function listar()
    {   
        $funcionarios['funcionarios'] = DB::table('Funcionarios')->get();
        return view('funcionarios/listar',$funcionarios);
    }
}
