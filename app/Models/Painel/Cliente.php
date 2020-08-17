<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable =[
        'name', 'cpf', 'cnpj', 'dt_cadastro'
    ];
    //protected $guarded =[];
}
