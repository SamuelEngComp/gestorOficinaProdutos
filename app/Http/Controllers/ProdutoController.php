<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;

class ProdutoController extends Controller
{
    private $produto;

    public function __construct(Produto $produto){
        $this->produto = $produto;
    }

    public function index(){
        return view('index');
    }

    public function cadastro(){
        return view('cadastro');
    }

    public function pesquisa(){

        $produtos = $this->produto->all();

        return view('pesquisa',compact('produtos'));
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function login(){
        return view('login');
    }

    //inserindo no banco
    public function salvar(Request $request){

        $produtoPraSerSalvo = $request->all();

        //mensagens
        $mensagens = [
            'descricao.required'=>'O campo descrição é obrigatório',
            'descricao.min'=>'O campo descrição tem que ter no mín 10 e max 150 caracteres',
            'descricao.max'=>'O campo descrição tem que ter no mín 10 e max 150 caracteres',
            
            'referencia.required'=>'O campo referencia é obrigatório',
            'referencia.min'=>'O campo referencia tem que ter no mín 10 e max 150 caracteres',
            'referencia.max'=>'O campo referencia tem que ter no mín 10 e max 150 caracteres',

            'preco_custo.required'=>'O campo preço é obrigatório',
            'preco_venda.required'=>'O campo preço é obrigatório',

            'grupo.required'=>'Selecione um grupo',
        ];

        //validando os dados do form
        $this->validate($request,$this->produto->rules,$mensagens);

        $salvo = $this->produto->create($produtoPraSerSalvo);

        if($salvo){
            return redirect('cadastro'); //falta a mensagem de confirmação
        }else{
            return view('index');
        }
    }

}
