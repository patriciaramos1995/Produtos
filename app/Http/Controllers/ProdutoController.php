<?php

namespace produto\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller {

	public function lista(){

		$produtos = DB::select('select * from produtos');
		
		/*
		foreach($produtos as $p){
			$html = "<h1>listagem de produtos</h1>";
			$html .= '<li> nome:'. $p->NOME_PRO.',
							descricao:'.$p->DESC_PRO.'</li>';
		}
		return $html;
		*/

		return view('listagem')->with('produtos',$produtos);

	}

}

?>