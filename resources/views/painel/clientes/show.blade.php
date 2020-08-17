@extends('painel.templates.template')

@section('content')

<h1 class='title-pg'>Deletar cliente<h1>

<p><b>Nome:</b> {{$product->name}}</p>
<p><b>cnpj:</b> {{$product->cnpj}}</p>
<p><b>Data de Cadastro:</b> {{$product->dt_cadastro}}</p>
<p><b>cpf:</b> {{$product->cpf}}</p>

<hr>
@if( isset($errors)  && count($errors) > 0)
    <div class="alert alert-danger">
        @foreach( $errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    </div>

@endif

{!! Form::open(['route' => ['clientes.destroy', $cliente->id], 'method' => 'DELETE']) !!}
    {!! Form::submit("Deletar cliente: $cliente->name", ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

@endsection
