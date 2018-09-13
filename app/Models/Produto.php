<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //lista branca
    protected $fillable = [
        'descricao','referencia','preco_custo','preco_venda','grupo'
    ];

    //lista negra -- ou seja, são campos que podem ou não ser preenchidos pelo usuário
    //protected $guarded = [];

    public $rules = [
        'descricao'=>'required|min:10|max:150',
        'referencia'=>'required|min:10|max:150',
        'preco_custo'=>'required|numeric',
        'preco_venda'=>'required|numeric',
        'grupo'=>'required'
    ];


    
}
