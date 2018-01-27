<?php

namespace produto\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Input;
use produto\Models\Categoria;

class CategoriaController extends Controller {

	public function lista(){

		$categorias = DB::select('select * from categorias');
		
		return view('listagem_categorias')->with('categorias',$categorias);

	}

	public function cadastro(){
		return view('cadastro_categoria');
	}


	public function adiciona(){
		$nome = Request::input('inputNomeCategoria');
		$foto = Request::input('inputFoto');


		DB::insert('insert into categorias(nome,foto)values(?,?)',array($nome,$foto));
		return view('cadastro_categoria');
	}

	public function exclui($id){
		$categoria = Categoria::find($id);
		$categoria->delete();
		return redirect()->action('CategoriaController@lista');

	}

}

?>