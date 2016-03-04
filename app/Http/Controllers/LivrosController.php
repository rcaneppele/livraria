<?php

namespace App\Http\Controllers;

use App\Livro;
use App\Http\Requests\LivroRequest;
use Illuminate\Http\Request;

class LivrosController extends Controller {

	public function lista() {
		$livrosCadastrados = Livro::all();

		return view('livros/lista')->with('livros', $livrosCadastrados);
	}

	public function form() {
		return view('livros/form');
	}

	public function cadastra(LivroRequest $request) {
		Livro::create($request->all());

		return redirect('/livros')->with('msg', 'Livro cadastrado com sucesso!');
	}

	public function edita($id) {
		$livro = Livro::find($id);
		return view('livros/form')->with('livro', $livro);
	}

	public function altera(LivroRequest $request) {
		$id = $request->input('id');
		$livro = Livro::find($id);

		$livro->update($request->all());

		return redirect('/livros')->with('msg', 'Livro atualizado com sucesso!');
	}

	public function remove(Request $request) {
		$id = $request->input('id');

		$livro = Livro::find($id);
		$livro->delete();

		return redirect('/livros')->with('msg', 'Livro removido com sucesso!');
	}

}
