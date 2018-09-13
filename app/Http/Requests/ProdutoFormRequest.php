<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'descricao'=>'required|min:10|max:150',
            'referencia'=>'required|min:10|max:150',
            'preco_custo'=>'required|numeric',
            'preco_venda'=>'required|numeric',
            'grupo'=>'required'
        ];
    }
    
    
    public function mensagens() {
        
        return [
            'descricao.required'=>'O campo descrição é obrigatório',
            'descricao.min'=>'O campo descrição tem que ter no mín 10 e max 150 caracteres',
            'descricao.max'=>'O campo descrição tem que ter no mín 10 e max 150 caracteres',
            
            'referencia.required'=>'O campo referencia é obrigatório',
            'referencia.min'=>'O campo referencia tem que ter no mín 10 e max 150 caracteres',
            'referencia.max'=>'O campo referencia tem que ter no mín 10 e max 150 caracteres',
            
            'preco_custo.required'=>'O campo preço é obrigatório',
            'preco_venda.required'=>'O campo preço é obrigatório',
            
            'grupo.required'=>'Selecione um grupo'
        ];
    }
    
}
















