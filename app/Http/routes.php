<?php

Route::group(['middleware' => ['web']], function () {
	Route::get('/livros', 'LivrosController@lista');
	Route::get('/livros/novo', 'LivrosController@form');
	Route::post('/livros', 'LivrosController@cadastra');
	Route::get('/livros/{id}', 'LivrosController@edita');
	Route::put('/livros', 'LivrosController@altera');
	Route::delete('/livros', 'LivrosController@remove');
});
