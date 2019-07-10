<?php 

namespace App\Http\Controllers; 

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB; 

class Animais extends Controller {
    public function listar()
    {
    	$animais['animais'] = DB::table('Animais')->get();
        return view('animais/listar',$animais);
    }

    public function cadastrar()
    {
        return view('animais/cadastrar');
    }

    public function store()
    {
    	$dados = $_GET;
    	unset($_GET['codigo']);
    	$result['result'] = DB::table('Animais')->insert($dados);
        
        if($result)
            return redirect('animais/listar')->with('success','Cadastrado com sucesso.');
        else
            return redirect('animais/listar')->with('error','Um erro aconteceu.');

    }
    
    public function getByName()
    {
        $animais['animais'] = DB::table('Animais')->whereRaw('LOWER(especie) LIKE ? ',[trim(strtolower($_GET['nome'])).'%'])->get();
        
        return view('animais/listar',$animais);
    }

    public function edit()
    { 
        $animais['animais'] = DB::table('Animais')->where('codigo','=',$_GET)->get();
        return view('animais/editar',$animais);
    }

    public function update()
    {
        $result['result'] = DB::table('Animais')
                ->where('codigo',$_GET['codigo'] )
                ->update($_GET);

        if($result)
            return redirect('animais/listar')->with('success','Editado com sucesso.');
        else
            return redirect('animais/listar')->with('error','Um erro aconteceu.');

    }

    public function delete()
    {
        if(DB::table('Animais')->where('codigo','=',$_GET['id'])->delete())
            return redirect('animais/listar')->with('success','Apagado com sucesso.');
        else
            return redirect('animais/listar')->with('error','Um erro aconteceu.');
    }
}
