<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable =[
        'cliente', 'total_produtos', 'data_venda'
    ];
    //protected $guarded =[];
}
