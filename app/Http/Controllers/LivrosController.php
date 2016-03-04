<?php

namespace App\Http\Controllers;

use App\Livro;

class LivrosController extends Controller {

	public function lista() {
		$livrosCadastrados = Livro::all();

		return view('livros/lista')->with('livros', $livrosCadastrados);
	}

}
