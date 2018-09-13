<?php

        
    

    Route::get('/index', 'ProdutoController@index');
    Route::get('/cadastro', 'ProdutoController@cadastro');
    Route::get('/dashboard', 'ProdutoController@dashboard');
    Route::get('/pesquisa', 'ProdutoController@pesquisa');
    Route::get('/login', 'ProdutoController@login');
    Route::post('/salvar', 'ProdutoController@salvar');
    Route::get('/editar/{$id}', 'ProdutoController@editar');
?>
