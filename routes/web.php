<?php

Route::get('/', function () {
    return view('index');
});

// ---------- CATEGORIA -----------

Route::get('/categorias', 'ControladorCategoria@index');
Route::get('/categorias/novo', 'ControladorCategoria@create');
Route::post('/categorias', 'ControladorCategoria@store');
Route::get('/categorias/apagar/{id}','ControladorCategoria@destroy');
Route::get('/categorias/editar/{id}','ControladorCategoria@edit');
Route::post('/categorias/{id}','ControladorCategoria@update');

// ---------- PRODUTO -----------

Route::get('/produtos', 'ControladorProduto@index');