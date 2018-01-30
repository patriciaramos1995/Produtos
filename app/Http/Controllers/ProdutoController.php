<?php

namespace produto\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use produto\Models\Produto;
use produto\Models\Categoria_Produto;

class ProdutoController extends Controller {

	public function lista(){

		$produtos = DB::select('select * from produtos');
		
		return view('listagem_produtos')->with('produtos',$produtos);

	}

	public function cadastro(){
		$categorias = DB::select('select * from categorias');
		return view('cadastro_produto')->with('categorias',$categorias);
	}

	public function adiciona($id = null){
		$nome = Request::input('inputNomeProduto');
		$descricao = Request::input('inputDescricaoProduto');
		$foto = Request::file('inputFoto');
		$foto->move(public_path().'/images/',$foto->getClientOriginalName());
		$foto = $foto->getClientOriginalName();
		
		$categoria = Request::input('selectCategorias');

		if($id){
			$produto = Produto::find($id);
			$produto->nome = $nome;
			$produto->descricao = $descricao;

			if(!empty($foto)){
				$produto->foto = $foto;
			}

			$produto->update();

			DB::select('delete from categoria__produtos where produto_id='.$id);
			foreach($categoria as $c):
				DB::insert('insert into categoria__produtos(categoria_id,produto_id)values(?,?)',array($c,$id));
			endforeach;
		}else{

		DB::insert('insert into produtos(nome,descricao,foto)values(?,?,?)',array($nome,$descricao,$foto));

		$produto = DB::getPdo()->lastInsertId();
		foreach($categoria as $c):
			DB::insert('insert into categoria__produtos(categoria_id,produto_id)values(?,?)',array($c,$produto));
		endforeach;
		}

		$produtos = DB::select('select * from produtos');
		
		return view('listagem_produtos')->with('produtos',$produtos);
	}

	public function exclui($id){
		$produto = Produto::find($id);
		$produto->delete();
		return redirect()->action('ProdutoController@lista');

	}

	public function edita($id){
		$produto = Produto::find($id);
		$categorias = DB::select('select * from categorias');
		$categorias_produto = DB::select('select * from categoria__produtos where produto_id='.$id);
		return view('cadastro_produto')->with('produto',$produto)->with('categorias',$categorias)->with('categoria_produto',$categorias_produto);

	}

	public function busca(){
		$busca = Request::input('buscaProduto');
		$tipo = Request::input('tipoBusca');
		if($tipo == "nome"){
			$produtos = DB::select("select * from produtos where nome like '%".$busca."%'");
		}else{
			$produtos = DB::select("select p.id,p.nome,p.descricao,p.foto from produtos p inner join categoria__produtos cp
			on p.id=cp.produto_id 
			inner join categorias c on c.id=cp.categoria_id
			where c.nome like '%".$busca."%'");
		}


		
		return view('listagem_produtos')->with('produtos',$produtos);

	}

	public function listaApi($id = null)
    {
    	if($id)
    	{
    		$produtos = Produto::find($id);

    		if(!$produtos) {
	            return response()->json([
	                'message'   => 'Não existe produto com esse id.',
	            ], 404);
        	}

    	}else{
    		$produtos = Produto::all();	

    		if(!$produtos) {
	            return response()->json([
	                'message'   => 'Não existem produtos a serem listados.',
	            ], 404);
        	}
    	}
        

         

        return response()->json($produtos);
    }

    public function __construct()
	{
	    $this->middleware('auth');
	}


}

?>