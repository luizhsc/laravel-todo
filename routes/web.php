<?php


Route::get('/', function () {
    return view('welcome');
});


Route::resource('tarefas', 'TarefasController');

Route::get("/autocomplete",array('as'=>'autocomplete','uses'=> 'TarefasController@autocomplete'));