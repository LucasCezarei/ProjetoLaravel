<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class FinalizadoFormRequest extends FormRequest
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
            'produto' => 'required|min:3|max:30', 
            'valor_produto' => 'required|numeric',
            'quantidade_vendida' => 'required|numeric', 
        ];
    }

    public function messages()
    {
        return [
            'produto.required' => 'O campo produto é obrigatorio',
            'valor_produto.required' => 'O campo valor é obrigatorio',
            'quantidade_vendida.required' => 'O campo quantidade é obrigatorio',
            
        ];
    }
}
