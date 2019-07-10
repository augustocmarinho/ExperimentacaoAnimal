<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Funcionarios extends Controller
{
    public function listar()
    {   
        $funcionarios['funcionarios'] = DB::table('users')->get();
        return view('funcionarios/listar',$funcionarios);
    }

    public function cadastrar()
    {   
        return view('funcionarios/cadastrar');
    }

    public function store()
    {
        $dados = $_GET;
        $dados['password']=bcrypt($dados['password']);
       
        unset($dados['senhaConfirm']);
        unset($_GET['id']);

        $result['result'] = DB::table('users')->insert($dados);


        $funcionarios['funcionarios'] = DB::table('users')->get();
        
        if($result)
            return redirect('funcionarios/listar')->with('success','Cadastrado com sucesso.');
        else
            return redirect('funcionarios/listar')->with('error','Um erro aconteceu.');
    }

    public function edit()
    {

        $funcionarios['funcionarios'] = DB::table('users')->find($_GET);
        return view('funcionarios/editar',$funcionarios);
        
    }

    public function update()
    {
        unset($_GET['senhaConfirm']);

        if(isset($_GET['password']) && $_GET['password']!=""){
            $_GET['password']=bcrypt($_GET['password']);
        } else {
            unset($_GET['password']);
        }
        

        $id = $_GET['id'];
        $result['result']=DB::table('users')
                            ->where('id', $_GET['id'])
                            ->update($_GET);

        $funcionarios['funcionarios'] = DB::table('users')->get();

        //return view('funcionarios/listar',$funcionarios,$result);
        if($result)
            return redirect('funcionarios/listar')->with('success','Editado com sucesso.');
        else
            return redirect('funcionarios/listar')->with('error','Um erro aconteceu.');

    }

    public function delete()
    {
        if (DB::table('users')->delete($_GET['id']))
            return redirect('funcionarios/listar')->with('success','Apagado com sucesso.');
        else
            return redirect('funcionarios/listar')->with('error','Um erro aconteceu.');

    }

}
