<?php

Route::get('/', function () {
    return view('home');
});

Route::resource('tarefas', 'TarefasController');

Route::resource('tags', 'TagsController');

Route::get('/search', 'TarefasController@busca');

Route::get('/home', 'TarefasController@home');