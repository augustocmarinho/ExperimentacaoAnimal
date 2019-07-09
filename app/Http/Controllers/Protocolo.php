<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Protocolo extends Controller
{
    public function cadastrar()
    {
        return view('protocolos/novoProtocolo');
    }
}
