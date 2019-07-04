<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Funcionarios extends Controller
{
    public function listar()
    {   
        $funcionarios['funcionarios'] = DB::table('Funcionarios')->get();
        return view('funcionarios/listar',$funcionarios);
    }

    public function cadastrar()
    {   
        return view('funcionarios/cadastrar');
    }

    public function store()
    {
        $dados = $_GET;
        $dados['senha']=bcrypt($dados['senha']);
       
        unset($dados['senhaConfirm']);
        unset($_GET['id']);

        $result['result'] = DB::table('Funcionarios')->insert($dados);


        $funcionarios['funcionarios'] = DB::table('Funcionarios')->get();
        
        return view('funcionarios/listar',$funcionarios,$result);
    }

    public function edit()
    {

        $funcionarios['funcionarios'] = DB::table('Funcionarios')->find($_GET);
        return view('funcionarios/editar',$funcionarios);
    }

    public function update()
    {
        unset($_GET['senhaConfirm']);

        if(isset($_GET['senha']) && $_GET['senha']!=""){
            $_GET['senha']=bcrypt($_GET['senha']);
        } else {
            unset($_GET['senha']);
        }
        

        $id = $_GET['id'];
        $result['result']=DB::table('Funcionarios')
                            ->where('id', $_GET['id'])
                            ->update($_GET);

        $funcionarios['funcionarios'] = DB::table('Funcionarios')->get();

        return view('funcionarios/listar',$funcionarios,$result);
    }

    public function delete()
    {
        DB::table('Funcionarios')->delete($_GET['id']);
        return redirect('/funcionarios/listar');
    }




}
