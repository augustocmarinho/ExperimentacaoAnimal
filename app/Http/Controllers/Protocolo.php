<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 


class Protocolo extends Controller
{
    public function cadastrar()
    {
        $dados['funcionarios'] = DB::table('users')->get();
        $dados['bioterios'] = DB::table('Bioterios')->get();
        $dados['animais'] = DB::table('Animais')->get();

        return view('protocolos/novoProtocolo',$dados);
    }

    public function store()
    {
        if(DB::table('Protocolos')->insert($_GET))
            return redirect('/protocolos/cadastrar')->with('success','Protocolo registrado com sucesso.');
        else
            return redirect('/protocolos/cadastrar')->with('error','Um erro aconteceu.');
    }
}
