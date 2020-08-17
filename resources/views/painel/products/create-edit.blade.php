@extends('painel.templates.template')

@section('content')

<h1 class='title-pg'>Criação de Vendas<h1>
@if( isset($errors)  && count($errors) > 0)
    <div class="alert alert-danger">
        @foreach( $errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    </div>

@endif


    @if( isset($product) )
    <form class="form" method="post" action="{{route('produtos.update', $product->id)}}">
    {!! method_field('PUT')!!}
    @else
    <form class="form" method="post" action="{{route('produtos.store')}}">
    @endif
    {!! csrf_field() !!}
    <div class="form-group">
        <input type="text" name="name" placeholder="Nome:" class="form-control" value="{{   old('name')}}"> 
    </div>
    <div class="form-group">
        <input type="text" name="preco" placeholder="Preço:" class="form-control" value="{{old('preco')}}">
    </div>
    <div class="form-group">
        <input type="date" name="dt_cadastro" placeholder="Data de Cadastro:" class="form-control" value="{{old('dt_cadastro')}}">
    </div>
    <div class="form-group">
        <input type="text" name="estoque" placeholder="Estoque:" class="form-control" value="{{old('estoque')}}"> 
    </div>
    <div class="form-group">
    <textarea type="text" name="description" placeholder="Descrição:" class="form-control" value="{{old('description')}}"></textarea> 
    </div>
    <!--<input type="checkbox" name="active" value="1">-->

    <button class="btn btn-primary">Enviar</button>
</form>

@endsection