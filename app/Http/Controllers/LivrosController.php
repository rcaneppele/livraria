<?php

namespace App\Http\Controllers;

use App\Livro;
use Illuminate\Http\Request;

class LivrosController extends Controller {

	public function lista() {
		$livrosCadastrados = Livro::all();

		return view('livros/lista')->with('livros', $livrosCadastrados);
	}

	public function form() {
		return view('livros/form');
	}

	public function cadastra(Request $request) {
		Livro::create($request->all());

		return redirect('/livros');
	}

}
