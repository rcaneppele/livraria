<?php

Route::group(['middleware' => ['web']], function () {
	Route::get('/livros', 'LivrosController@lista');
});
