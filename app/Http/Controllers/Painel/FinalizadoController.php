<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Painel\Finalizado;
use App\Http\Requests\Painel\FinalizadoFormRequest;

class FinalizadoController extends Controller
{

    private $finalizado;

    public function __construct(Finalizado $finalizado)
    {
        $this->finalizado = $finalizado; 
    }
    

    public function index(Finalizado $finalizado)
    {

        $title = 'Listagem dos finalizados';

        $finalizados = $this->finalizado->all();

        return view('painel.finalizados.index', compact('finalizados', 'title'));
    }

   
    public function create()
    {

        $title = 'Cadastrar novo Item';
        return view('painel.finalizados.create-edit', compact('title'));
    }

    
    public function store(FinalizadoFormRequest $request)
    {
        $dataForm = $request->all();

        $insert = $this->finalizado->create($dataForm);

        if($insert)
            return redirect()->route('finalizados.index');
        else
            return redirect()->route('finalizados.create');
    }

   
    public function show($id)
    {
        $finalizado = $this->finalizado->find($id);


        return view('painel.finalizados.show', compact('finalizado'));
    }

    
    public function edit($id)
    {
        $finalizado = $this->finalizado->find($id);

        $title = "Editar Finalizado";

        return view('painel.finalizados.create-edit', compact('title','finalizado'));

    }


    public function update(FinalizadoFormRequest $request, $id)
    {

        $dataForm = $request-> all();

        $finalizado = $this->finalizado->find($id);

        $update = $finalizado->update($dataForm);

        if ( $update )
            return redirect()->route('finalizados.index');
        else
            return redirect()->route('finalizados.edit', $id)->with(['errors' => 'Falhas ao editar']);
    }


    public function destroy($id)
    {
        $finalizado = $this->finalizado->find($id);

        $delete = $finalizado->delete();

        if( $delete )
            return redirect()->route('finalizados.index');
        else
            return redirect()->route('finalizados.edit', $id)->with(['errors' => 'Falha ao deletar']);
    }

    public function tests()
    {
        $final = $this->finalizado->find(3);
        $delete = $final->delete();

        if($delete)
            return 'Deletado com sucesso';
        else
            return 'Não deletado';
        
    }
}
