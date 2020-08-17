<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class VendaFormRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'cliente' => 'required|min:3|max:30', 
            'total_produtos' => 'required|numeric',
            'data_venda' => 'required|', 
        ];
    }

    public function messages()
    {
        return [
            'cliente.required' => 'O campo cliente é obrigatorio',
            'total_produtos.required' => 'O campo produtos é obrigatorio',
            'data_venda.required' => 'O campo Venda é obrigatorio',
            
        ];
    }
}
