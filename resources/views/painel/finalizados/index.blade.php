@extends('painel.templates.template')

@section('content')

<h1 class='title-pg'>Listagem de Finalizados<h1>

<a href="{{route('finalizados.create')}}" class="btn btn-primary btn-add">
    <spam class="glyphicon glyphicon-plus"></spam> Criar Listagem de Venda
</a>


<table class="table table-striped">
    <tr>
        <th>Produto</th>
        <th>Valor do Produto</th>
        <th>Quantidade de Produto</th>
        <th width="100px">Ações</th>
    </tr>
    @foreach($finalizados as $finalizado)
    <tr>
        <td>{{$finalizado->produto}}</td>
        <td>{{$finalizado->valor_produto}}</td>
        <td>{{$finalizado->quantidade_vendida}}</td>
        <td>
            <a href="{{route('finalizados.edit', $finalizado->id)}}" class="actions edit">
                <spam class="glyphicon glyphicon-ok"></spam>
            </a>
            <a href="{{route('finalizados.show', $finalizado->id)}}" class="actions delete">
                <spam class="glyphicon glyphicon-trash"></spam>
            </a>
        </td>
    </tr>
    @endforeach
</table>

@endsection
