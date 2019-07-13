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
            return redirect('/protocolos/listar')->with('success','Protocolo registrado com sucesso.');
        else
            return redirect('/protocolos/cadastrar')->with('error','Um erro aconteceu.');
    }

    public function listar()
    {
        $protocolo['protocolo'] = DB::table('Protocolos')
                                ->join('users', 'Protocolos.IDsolicitante', '=', 'users.id')
                                ->select('Protocolos.*', 'users.nome')
                                ->get();

        return view('protocolos/listar',$protocolo);
    }

    public function getByName()
    {
        
    }

    public function enviar()
    {
        $protocolo['protocolo'] = DB::table('Protocolos')->where('id',$_GET)->update(['status' => 'Aguardando parecer']);
        return redirect('protocolos/listar');
    }
}
