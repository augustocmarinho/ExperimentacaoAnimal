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
    	$animais['animais'] = DB::table('Animais')->get();
    	return redirect('animais/listar');
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

        $animais['animais'] = DB::table('Animais')->get();
        return view('animais/listar',$animais,$result);
    }
    public function delete()
    {
        $codigo = $_GET['id']; 
        DB::table('Animais')->where('codigo','=',$codigo)->delete();
        return redirect('/animais/listar');
    }
}
