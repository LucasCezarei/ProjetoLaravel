@extends('painel.templates.template')

@section('content')

<h1 class='title-pg'>Cadastro de Finalização<h1>
@if( isset($errors)  && count($errors) > 0)
    <div class="alert alert-danger">
        @foreach( $errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    </div>

@endif


    @if( isset($finalizado) )
    <form class="form" method="post" action="{{route('finalizados.update', $finalizado->id)}}">
    {!! method_field('PUT')!!}
    @else
    <form class="form" method="post" action="{{route('finalizados.store')}}">
    @endif
    {!! csrf_field() !!}
    <div class="form-group">
        <input type="text" name="produto" placeholder="Nome do Produto:" class="form-control" value="{{   old('produto')}}"> 
    </div>
    <div class="form-group">
        <input type="text" name="valor_produto" placeholder="Valor dos Produtos:" class="form-control" value="{{old('valor_produto')}}">
    </div>
    <div class="form-group">
        <input type="text" name="quantidade_vendida" placeholder="Quantidade de Vendas:" class="form-control" value="{{old('quantidade_vendida')}}">
    </div>
    <!--<input type="checkbox" name="active" value="1">-->

    <button class="btn btn-primary">Criar</button>
</form>

@endsection