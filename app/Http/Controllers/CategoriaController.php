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


	public function adiciona($id = null){
		$nome = Request::input('inputNomeCategoria');
		$foto = Request::file('inputFoto');
		
		$foto->move(public_path().'/images/',$foto->getClientOriginalName());
		$foto = $foto->getClientOriginalName();


		if($id){
			$categoria = Categoria::find($id);
			$categoria->nome = $nome;

			if(!empty($foto)){
				$categoria->foto = $foto;
			}

			$categoria->update();


		}else{
			DB::insert('insert into categorias(nome,foto)values(?,?)',array($nome,$foto));
		}
		
		$categorias = DB::select('select * from categorias');
		
		return view('listagem_categorias')->with('categorias',$categorias);
	}

	public function exclui($id){
		$categoria = Categoria::find($id);
		$categoria->delete();
		return redirect()->action('CategoriaController@lista');

	}

	public function edita($id){
		$categoria = Categoria::find($id);
		return view('cadastro_categoria')->with('categoria',$categoria);

	}

	public function busca(){
		$nome = Request::input('buscaCategoria');
		$categorias = DB::select("select * from categorias where nome like '%".$nome."%'");
		return view('listagem_categorias')->with('categorias',$categorias);

	}

}

?>