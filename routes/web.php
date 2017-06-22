<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', function () {
    return view('produtos.index');
});