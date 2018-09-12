<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    //private $produto;

    //public function __construct(Produto $produto){
     //   $this->produto = $produto;
    //}

    public function index(){
        return view('index');
    }

    public function cadastro(){
        return view('cadastro');
    }

    public function pesquisa(){
        return view('pesquisa');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function login(){
        return view('login');
    }

}
