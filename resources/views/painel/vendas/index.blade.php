@extends('painel.templates.template')

@section('content')

<h1 class='title-pg'>Listagem de vendas<h1>

<a href="{{route('vendas.create')}}" class="btn btn-primary btn-add">
    <spam class="glyphicon glyphicon-plus"></spam> Realizar uma venda
</a>


<table class="table table-striped">
    <tr>
        <th>Cliente</th>
        <th>Total de produtos</th>
        <th>Data de Venda</th>
        <th width="100px">Ações</th>
    </tr>
    @foreach($vendas as $venda)
    <tr>
        <td>{{$venda->cliente}}</td>
        <td>{{$venda->total_produtos}}</td>
        <td>{{$venda->data_venda}}</td>
        <td>
            <a href="{{route('vendas.edit', $venda->id)}}" class="actions edit">
                <spam class="glyphicon glyphicon-ok"></spam>
            </a>
            <a href="{{route('vendas.show', $venda->id)}}" class="actions delete">
                <spam class="glyphicon glyphicon-trash"></spam>
            </a>
        </td>
    </tr>
    @endforeach
</table>

@endsection
