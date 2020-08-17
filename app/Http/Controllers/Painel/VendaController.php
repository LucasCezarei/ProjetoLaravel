<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Painel\Venda;
use App\Http\Requests\Painel\VendaFormRequest;

class VendaController extends Controller
{

    private $venda;

    public function __construct(Venda $venda)
    {
        $this->venda = $venda; 
    }
    

    public function index(Venda $venda)
    {

        //return Produto::all();
        $title = 'Listagem das vendas';

        $vendas = $this->venda->all();

        return view('painel.vendas.index', compact('vendas', 'title'));
    }

   
    public function create()
    {

        $title = 'Cadastrar novo Item';
        return view('painel.vendas.create-edit', compact('title'));
    }

    
    public function store(VendaFormRequest $request)
    {
        $dataForm = $request->all();

        $insert = $this->venda->create($dataForm);

        if($insert)
            return redirect()->route('vendas.index');
        else
            return redirect()->route('vendas.create');
    }

   
    public function show($id)
    {
        $venda = $this->venda->find($id);


        return view('painel.vendas.show', compact('venda'));
    }

    
    public function edit($id)
    {
        $venda = $this->venda->find($id);

        $title = "Editar Venda";

        return view('painel.vendas.create-edit', compact('title','venda'));

    }


    public function update(VendaFormRequest $request, $id)
    {

        $dataForm = $request-> all();

        $venda = $this->venda->find($id);

        $update = $venda->update($dataForm);

        if ( $update )
            return redirect()->route('vendas.index');
        else
            return redirect()->route('vendas.edit', $id)->with(['errors' => 'Falhas ao editar']);
    }


    public function destroy($id)
    {
        $venda = $this->venda->find($id);

        $delete = $venda->delete();

        if( $delete )
            return redirect()->route('vendas.index');
        else
            return redirect()->route('vendas.edit', $id)->with(['errors' => 'Falha ao deletar']);
    }

    public function tests()
    {

        $vend = $this->venda->find(3);
        $delete = $vend->delete();

        if($delete)
            return 'Deletado com sucesso';
        else
            return 'Não deletado';
        
    }
}
