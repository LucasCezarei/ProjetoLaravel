@extends('painel.templates.template')

@section('content')

<h1 class='title-pg'>Listagem de produtos<h1>

<a href="{{route('produtos.create')}}" class="btn btn-primary btn-add">
    <spam class="glyphicon glyphicon-plus"></spam> Cadastrar
</a>


<table class="table table-striped">
    <tr>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th>Cadastro</th>
        <th>Estoque</th>
        <th width="100px">Ações</th>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{$product->name}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->preco}}</td>
        <td>{{$product->dt_cadastro}}</td>
        <td>{{$product->estoque}}</td>
        <td>
            <a href="{{route('produtos.edit', $product->id)}}" class="actions edit">
                <spam class="glyphicon glyphicon-ok"></spam>
            </a>
            <a href="{{route('produtos.show', $product->id)}}" class="actions delete">
                <spam class="glyphicon glyphicon-trash"></spam>
            </a>
        </td>
    </tr>
    @endforeach
</table>

@endsection
