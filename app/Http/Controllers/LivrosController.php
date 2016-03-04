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

		return $this->redirectWithMessage('Livro cadastrado com sucesso!');
	}

	public function edita($id) {
		$livro = Livro::find($id);

		return view('livros/form')->with('livro', $livro);
	}

	public function altera(LivroRequest $request) {
		$livro = $this->buscaLivroPorId($request);
		$livro->update($request->all());

		return $this->redirectWithMessage('Livro atualizado com sucesso!');
	}

	public function remove(Request $request) {
		$livro = $this->buscaLivroPorId($request);
		$livro->delete();

		return $this->redirectWithMessage('Livro removido com sucesso!');
	}

	private function buscaLivroPorId($request) {
		$id = $request->input('id');

		return Livro::find($id);
	}

	private function redirectWithMessage($msg) {
		return redirect('/livros')->with('msg', $msg);
	}

}
