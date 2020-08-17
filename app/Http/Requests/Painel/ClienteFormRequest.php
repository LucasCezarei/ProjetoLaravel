<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class ClienteFormRequest extends FormRequest
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
            'cpf' => 'required|numeric',
            'cnpj' => 'required|numeric', 
            'dt_cadastro' => 'required|', 
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatorio',
            'cpf.required' => 'O campo CPF é obrigatorio',
            'cnpj.required' => 'O campo CNPJ é obrigatorio',
            'dt_cadastro.required' => 'O campo Data de Cadastro é obrigatorio',
            
        ];
    }
}
