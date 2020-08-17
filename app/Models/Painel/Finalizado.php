<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Finalizado extends Model
{
    protected $fillable =[
        'produto', 'valor_produto', 'quantidade_vendida', 
    ];
    //protected $guarded =[];
}
