<?php

namespace produto\Http\Controllers;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller {

	public function lista(){

		$cateorias = DB::select('select * from categorias');
		
		return view('listagem')->with('categorias',$categorias);

	}

	public function cadastro(){
		return view('cadastro_categoria');
	}

}

?>