<?php

namespace produto\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class ProdutoController extends Controller {

	public function lista(){

		$produtos = DB::select('select * from produtos');
		
		return view('listagem')->with('produtos',$produtos);

	}

	public function cadastro(){
		$categorias = DB::select('select * from categorias');
		return view('cadastro_produto')->with('categorias',$categorias);
	}

	public function adiciona(){
		$nome = Request::input('inputNomeProduto');
		$descricao = Request::input('inputDescricaoProduto');
		$foto = Request::input('inputFoto');
		$categoria = Request::input('selectCategorias');

		DB::insert('insert into produtos(nome,descricao,foto)values(?,?,?)',array($nome,$descricao,$foto));

		$produto = DB::getPdo()->lastInsertId();

		DB::insert('insert into categoria__produtos(categoria_id,produto_id)values(?,?)',array($categoria,$produto));

		$categorias = DB::select('select * from categorias');
		return view('cadastro_produto')->with('categorias',$categorias);
	}



}

?>