@extends('painel.templates.template')

@section('content')

<h1 class='title-pg'>Cadastro de Vendas<h1>
@if( isset($errors)  && count($errors) > 0)
    <div class="alert alert-danger">
        @foreach( $errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    </div>

@endif


    @if( isset($venda) )
    <form class="form" method="post" action="{{route('vendas.update', $venda->id)}}">
    {!! method_field('PUT')!!}
    @else
    <form class="form" method="post" action="{{route('vendas.store')}}">
    @endif
    {!! csrf_field() !!}
    <div class="form-group">
        <input type="text" name="cliente" placeholder="Nome do Cliente:" class="form-control" value="{{   old('cliente')}}"> 
    </div>
    <div class="form-group">
        <input type="text" name="total_produtos" placeholder="Valor Total dos Produtos:" class="form-control" value="{{old('total_produtos')}}">
    </div>
    <div class="form-group">
        <input type="date" name="data_venda" placeholder="Data de Realização da Venda:" class="form-control" value="{{old('data_venda')}}">
    </div>
    <!--<input type="checkbox" name="active" value="1">-->

    <button class="btn btn-primary">Finalizar</button>
</form>

@endsection