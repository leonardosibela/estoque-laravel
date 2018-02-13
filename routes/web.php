<?php

Route::get('/', function() {
    return '<h1>Primeira lógica com Laravel</h1>';
});

Route::get('/outra', function() {
    return '<h1>Outra lógica com Laravel</h1>';
});

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');