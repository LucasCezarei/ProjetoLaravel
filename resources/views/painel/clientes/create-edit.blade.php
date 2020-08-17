@extends('painel.templates.template')

@section('content')

<h1 class='title-pg'>Cadastro de Cliente<h1>
@if( isset($errors)  && count($errors) > 0)
    <div class="alert alert-danger">
        @foreach( $errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    </div>

@endif


    @if( isset($cliente) )
    <form class="form" method="post" action="{{route('clientes.update', $cliente->id)}}">
    {!! method_field('PUT')!!}
    @else
    <form class="form" method="post" action="{{route('clientes.store')}}">
    @endif
    {!! csrf_field() !!}
    <div class="form-group">
        <input type="text" name="name" placeholder="Nome:" class="form-control" value="{{   old('name')}}"> 
    </div>
    <div class="form-group">
        <input type="text" name="cpf" placeholder="CPF:" class="form-control" value="{{old('cpf')}}">
    </div>
    <div class="form-group">
        <input type="text" name="dt_cadastro" placeholder="Data de Cadastro:" class="form-control" value="{{old('dt_cadastro')}}">
    </div>
    <div class="form-group">
        <input type="text" name="cnpj" placeholder="CNPJ:" class="form-control" value="{{old('cnpj')}}"> 
    </div>
    <!--<input type="checkbox" name="active" value="1">-->

    <button class="btn btn-primary">Enviar</button>
</form>

@endsection