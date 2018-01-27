<?php

namespace produto\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class CategoriaController extends Controller {

	public function lista(){

		$cateorias = DB::select('select * from categorias');
		
		return view('listagem')->with('categorias',$categorias);

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

}

?>