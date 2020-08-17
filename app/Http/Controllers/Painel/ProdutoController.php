<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Painel\Product;
use App\Http\Requests\Painel\ProductFormRequest;

class ProdutoController extends Controller
{

    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product; 
    }
    

    public function index(Product $product)
    {

        //return Produto::all();
        $title = 'Listagem dos produtos';

        $products = $this->product->all();

        return view('painel.products.index', compact('products', 'title'));
    }

   
    public function create()
    {

        $title = 'Cadastrar novo Item';
        return view('painel.products.create-edit', compact('title'));
    }

    
    public function store(ProductFormRequest $request)
    {
        $dataForm = $request->all();


        //$this->validate($request, $this->product->rules);

        /*$validate = validator($dataForm, $this->product->rules, $messages);
        if( $validate->fails() ){
            return redirect()
                ->route('produtos.create')
                ->withErrors($validate)
                ->withInput();
        }
        */

        $insert = $this->product->create($dataForm);

        if($insert)
            return redirect()->route('produtos.index');
        else
            return redirect()->route('produtos.create');
    }

   
    public function show($id)
    {
        $product = $this->product->find($id);


        return view('painel.products.show', compact('product'));
    }

    
    public function edit($id)
    {
        $product = $this->product->find($id);

        $title = "Editar Produto";

        return view('painel.products.create-edit', compact('title','product'));

    }


    public function update(ProductFormRequest $request, $id)
    {

        $dataForm = $request-> all();

        $product = $this->product->find($id);

        $update = $product->update($dataForm);

        if ( $update )
            return redirect()->route('produtos.index');
        else
            return redirect()->route('produtos.edit', $id)->with(['errors' => 'Falhas ao editar']);
    }


    public function destroy($id)
    {
        $product = $this->product->find($id);

        $delete = $product->delete();

        if( $delete )
            return redirect()->route('produtos.index');
        else
            return redirect()->route('produtos.edit', $id)->with(['errors' => 'Falha ao deletar']);
    }

    public function tests()
    {
       /* $insert = $this->product->create([
            'name'        => 'Nome do Produto',
            'description' => 'Descrição do Produto',
            'preco'       => 15,
            'dt_cadastro' => '15/03/2020',
            'estoque'     => 3,
        ]);
        if($insert)
            return "Inserido com Sucesso, ID: ($insert->id)";
        else
            return 'Falha ao Enserir';
        */
       
        /*$prod = $this->product->find(5);
        $prod->name = 'update'; 
        $prod->description = 'novo produto'; 
        $prod->preco = 350; 
        $prod->dt_cadastro= '13/08/2020'; 
        $prod->estoque = 2;
        $update = $prod->save();

        if( $update )
            return 'Alterado com sucesso';
        else
            return 'Não alterado';
        */

        $prod = $this->product->find(3);
        $delete = $prod->delete();

        if($delete)
            return 'Deletado com sucesso';
        else
            return 'Não deletado';
        
    }
}
