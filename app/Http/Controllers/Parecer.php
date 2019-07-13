<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Parecer extends Controller {
    public function listar()
    {
        $parecer['parecer'] = DB::table('Parecer')->get();

        return view('parecer/listar',$parecer);
    }

    public function pendentes()
    {
        $protocolo['protocolo'] = DB::table('Protocolos')->join('users', 'Protocolos.IDsolicitante', '=', 'users.id')->select('Protocolos.*','users.nome')->where('status', 'Aguardando parecer')->whereOr('status', 'Aguardando a deliberação')->get();
        return view('parecer/pendentes',$protocolo);
    }
}