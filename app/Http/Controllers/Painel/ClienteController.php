<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Painel\Cliente;
use App\Http\Requests\Painel\ClienteFormRequest;

class ClienteController extends Controller
{
    private $cliente;

    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente; 
    }
  
    public function index(Cliente $cliente)
    {
    
        $title = 'Listagem dos produtos';

        $clientes = $this->cliente->all();

        return view('painel.clientes.index', compact('clientes', 'title'));
    }


    public function create()
    {
        $title = 'Cadastrar novo Produto';
        return view('painel.clientes.create-edit', compact('title'));
    }


    public function store(ClienteFormRequest $request)
    {
        $dataForm = $request->all();

        $insert = $this->cliente->create($dataForm);

        if($insert)
            return redirect()->route('clientes.index');
        else
            return redirect()->route('clientes.create');
    }

   
    public function show($id)
    {
        $cliente = $this->cliente->find($id);


        return view('painel.clientes.show', compact('cliente'));
    }

   
    public function edit($id)
    {
        $cliente = $this->cliente->find($id);

        $title = "Editar Cliente";

        return view('painel.clientes.create-edit', compact('title','cliente'));
    }

  
    public function update(ClienteFormRequest $request, $id)
    {
        $dataForm = $request-> all();

        $cliente = $this->cliente->find($id);

        $update = $cliente->update($dataForm);

        if ( $update )
            return redirect()->route('clientes.index');
        else
            return redirect()->route('clientes.edit', $id)->with(['errors' => 'Falhas ao editar']);
    }

    
    public function destroy($id)
    {
        $cliente = $this->cliente->find($id);

        $delete = $cliente->delete();

        if( $delete )
            return redirect()->route('clientes.index');
        else
            return redirect()->route('clientes.edit', $id)->with(['errors' => 'Falha ao deletar']);
    }

    public function tests()
    {

        $client = $this->cliente->find(3);
        $delete = $client->delete();

        if($delete)
            return 'Deletado com sucesso';
        else
            return 'Não deletado';
        
    }
}
