<?php

namespace produto\Http\Controllers;


class PrincipalController extends Controller {

	public function principal(){
		return view('principal');
	}
	public function __construct()
	{
	    $this->middleware('auth');
	}
}

?>