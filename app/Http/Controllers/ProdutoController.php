<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;

use App\Http\Requests\ProdutoFormRequest;

class ProdutoController extends Controller
{
    private $produto;

    public function __construct(Produto $produto){
        $this->produto = $produto;
    }

    //apenas chamando as views
    public function index(){
        return view('index');
    }
    
    //apenas chamando as views
    public function cadastro(){
        
        $categorias = ['Acessorios','Moto','Veiculo'];
        
        return view('cadastro',compact('categorias'));
    }

    
    
    //listando os produtos do banco e enviando pra view
    public function pesquisa(){

        $produtos = $this->produto->all();

        return view('pesquisa',compact('produtos'));
    }

    
    //exibindo um dashboard gambiarra
    public function dashboard(){
        
        $produtos = $this->produto->all();
        
        return view('dashboard',compact('produtos'));
    }

    
    //apenas chamando as views
    public function login(){
        return view('login');
    }

    //inserindo no banco
    public function salvar(ProdutoFormRequest $request){

        $produtoPraSerSalvo = $request->all();

        $salvo = $this->produto->create($produtoPraSerSalvo);

        if($salvo){
            return redirect('cadastro'); //falta a mensagem de confirmação
        }else{
            return view('index');
        }
    }
    
    
    //editando
    public function editar($id) {
        //$produtoEditar = $this->produto->find($id);
        
        //return view('cadastro',compact('produtoEditar'));
        
        return "Editando ... {$id}";
    }
    
    //removendo
    public function remover() {
        
    }
    
 

}







