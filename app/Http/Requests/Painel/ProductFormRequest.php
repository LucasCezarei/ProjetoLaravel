<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            'name' => 'required|min:3|max:30', 
            'description' => 'required|min:3|max:1000',
            'preco' => 'required|numeric', 
            'dt_cadastro' => 'required|', 
            'estoque' => 'required|numeric', 
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatorio',
            'description.required' => 'O campo Descrição é obrigatorio',
            'preco.required' => 'O campo Preço é obrigatorio',
            'dt_cadastro.required' => 'O campo Data de Cadastro é obrigatorio',
            'estoque.required' => 'O campo Estoque é obrigatorio',
            
        ];
    }
}
