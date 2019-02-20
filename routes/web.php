<?php

Route::get('/', function () {
    return '<h1>Bem-vindo</h1>';
});

Route::get('/produtos', 'ProdutoController@listaProdutos');
Route::get('/produtos/mostra/{id}', 'ProdutoController@exibeProduto');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::get('/produtos/json', 'ProdutoController@produtosJSON');

Route::post('/produtos/adiciona', 'ProdutoController@adicionaProduto');