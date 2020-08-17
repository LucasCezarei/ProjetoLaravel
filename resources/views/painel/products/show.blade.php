@extends('painel.templates.template')

@section('content')

<h1 class='title-pg'>Deletar Produto<h1>

<p><b>Nome:</b> {{$product->name}}</p>
<p><b>Preço:</b> {{$product->preco}}</p>
<p><b>Data de Cadastro:</b> {{$product->dt_cadastro}}</p>
<p><b>estoque:</b> {{$product->estoque}}</p>
<p><b>Descrição:</b> {{$product->description}}</p>

<hr>
@if( isset($errors)  && count($errors) > 0)
    <div class="alert alert-danger">
        @foreach( $errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    </div>

@endif

{!! Form::open(['route' => ['produtos.destroy', $product->id], 'method' => 'DELETE']) !!}
    {!! Form::submit("Deletar Produto: $product->name", ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

@endsection
