<?php


Route::get('/', function () {
    return view('welcome');
});


Route::resource('tarefas', 'TarefasController');

Route::resource('tags', 'TagsController');
