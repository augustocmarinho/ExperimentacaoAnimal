<?php 

namespace App\Http\Controllers; 

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB; 

class Animais extends Controller {
    public function listar()
    {
        $animais['animais'] = DB::table('Animais')
                                ->join('Bioterios', 'Animais.codBioterio', '=', 'Bioterios.id')
                                ->select('Animais.*', 'Bioterios.nome')
                                ->get();
        return view('animais/listar',$animais);
    }

    public function cadastrar()
    {
        $bioterios['bioterios'] = DB::table('Bioterios')->get();
        return view('animais/cadastrar',$bioterios);
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
        $animais['animais'] = DB::table('Animais')->whereRaw('LOWER(especie) LIKE ? ',[trim(strtolower($_GET['nome'])).'%'])
                                ->join('Bioterios', 'Animais.codBioterio', '=', 'Bioterios.id')
                                ->select('Animais.*', 'Bioterios.nome')
                                ->get();
        return view('animais/listar',$animais);
    }

    public function edit()
    { 
        $bioterios['bioterios'] = DB::table('Bioterios')->get();
        $animais['animais'] = DB::table('Animais')->where('codigo','=',$_GET)->get();
        return view('animais/editar',$animais,$bioterios);
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
