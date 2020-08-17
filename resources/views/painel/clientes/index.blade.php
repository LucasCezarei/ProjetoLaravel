@extends('painel.templates.template')

@section('content')

<h1 class='title-pg'>Listagem de clientes<h1>

<a href="{{route('clientes.create')}}" class="btn btn-primary btn-add">
    <spam class="glyphicon glyphicon-plus"></spam> Cadastrar
</a>


<table class="table table-striped">
    <tr>
        <th>Nome</th>
        <th>cpf</th>
        <th>cnpj</th>
        <th>Cadastro</th>
        <th width="100px">Ações</th>
    </tr>
    @foreach($clientes as $cliente)
    <tr>
        <td>{{$cliente->name}}</td>
        <td>{{$cliente->cpf}}</td>
        <td>{{$cliente->cnpj}}</td>
        <td>{{$cliente->dt_cadastro}}</td>
        <td>
            <a href="{{route('clientes.edit', $cliente->id)}}" class="actions edit">
                <spam class="glyphicon glyphicon-ok"></spam>
            </a>
            <a href="{{route('clientes.show', $cliente->id)}}" class="actions delete">
                <spam class="glyphicon glyphicon-trash"></spam>
            </a>
        </td>
    </tr>
    @endforeach
</table>

@endsection
