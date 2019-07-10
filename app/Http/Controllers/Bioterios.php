<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class Bioterios extends Controller
{
    public function cadastrar()
    {
        return view('bioterios/cadastrar');
    }

    public function listar()
    {
    	$bioterios['bioterios'] = DB::table('Bioterios')->get();
        return view('bioterios/listar',$bioterios);
    }

    public function store()
    {
    	$dados = $_GET;
    	unset($_GET['id']);

    	$result['result'] = DB::table('Bioterios')->insert($dados);

    	if($result)
            return redirect('bioterios/listar')->with('success','Cadastrado com sucesso.');
        else
            return redirect('bioterios/listar')->with('error','Um erro aconteceu.');
    }

    public function getByName()
    {
        $bioterios['bioterios'] = DB::table('Bioterios')->whereRaw('LOWER(nome) LIKE ? ',[trim(strtolower($_GET['nome'])).'%'])->get();
        return view('bioterios/listar',$bioterios);
    }


    public function edit()
    {
        $bioterios['bioterios'] = DB::table('Bioterios')->find($_GET);
        return view('bioterios/editar',$bioterios);
    }

    public function update()
    {
        $id = $_GET['id'];
        $result['result']=DB::table('Bioterios')
                            ->where('id', $_GET['id'])
                            ->update($_GET);

        $bioterios['bioterios'] = DB::table('Bioterios')->get();

        if($result)
            return redirect('bioterios/listar')->with('success','Editado com sucesso.');
        else
            return redirect('bioterios/listar')->with('error','Um erro aconteceu.');
    }

    public function delete()
    {
        if(DB::table('Bioterios')->delete($_GET['id']))
            return redirect('bioterios/listar')->with('success','Apagado com sucesso.');
        else
            return redirect('bioterios/listar')->with('error','Um erro aconteceu.');
    }
}
