<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =[
        'name', 'description', 'preco', 'dt_cadastro', 'estoque'
    ];
    //protected $guarded =[];
}
