<?php namespace App\Http\Controllers; use Illuminate\Http\Request; use 
Illuminate\Support\Facades\DB; class Animais extends Controller {
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
    	unset($_GET['id']);
    	$result['result'] = DB::table('Animais')->insert($dados);
    	$animais['animais'] = DB::table('Animais')->get();
    	return redirect('animais/listar');
    }
    public function delete()
    {
        DB::table('Animais')->delete($_GET['codigo']);
        return redirect('/animais/listar');
    }
}
