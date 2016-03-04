<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model {

	public $fillable = ['nome', 'preco', 'isbn'];
	public $timestamps = false;

}