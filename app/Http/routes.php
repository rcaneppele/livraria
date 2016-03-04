<?php

Route::group(['middleware' => ['web']], function () {
	Route::get('/livros', 'LivrosController@lista');
	Route::get('/livros/novo', 'LivrosController@form');
	Route::post('/livros', 'LivrosController@cadastra');
	Route::delete('/livros', 'LivrosController@remove');
});
