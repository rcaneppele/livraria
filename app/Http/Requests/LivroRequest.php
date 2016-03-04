<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LivroRequest extends Request {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'nome' => 'required|min:5|max:255',
            'preco' => 'required|numeric|between:1,999',
            'isbn' => 'required|unique:livros,isbn,'.$this->id
        ];
    }

    public function messages() {
        return [
            'required' => 'Campo :attribute é obrigatório!',
            'min' => 'Campo :attribute deve ter no mínimo :min caracteres!',
            'max' => 'Campo :attribute deve ter no máximo :max caracteres!',
            'numeric' => 'Campo :attribute deve ser numérico!',
            'isbn.unique' => 'Já existe outro livro com o ISBN digitado!',
            'preco.between' => 'Preço deve custar entre R$1 e R$999'
        ];
    }
}
