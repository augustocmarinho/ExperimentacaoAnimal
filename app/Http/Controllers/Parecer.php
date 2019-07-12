<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Parecer extends Controller {
    public function listar()
    {
        $parecer['parecer'] = DB::$table('Parecer')->get();

        return view('parecer/listar',$parecer);
    }
}