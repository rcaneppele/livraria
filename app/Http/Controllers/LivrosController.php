<?php

namespace App\Http\Controllers;

class LivrosController extends Controller {

	public function lista() {
		return view('livros/lista')->with('livros', []);
	}

}
