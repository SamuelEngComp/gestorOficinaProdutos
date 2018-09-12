<?php


    Route::get('/', function () {
        return view('index');
    })->name('tela-index');
    
    
    Route::get('/index', function () {
        return view('index');
    });
    
    Route::get('/cadastro', function () {
        return view('cadastro');
    })->name('tela-cadastro');
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('tela-dashboard');
    
    Route::get('/pesquisa', function () {
        return view('pesquisa');
    })->name('tela-pesquisa');
    
    Route::get('/login', function () {
        return view('login');
    })->name('tela-login');
