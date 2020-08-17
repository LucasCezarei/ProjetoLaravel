@extends('painel.templates.template')

@section('content')

<h1 class='title-pg'>Deletar Venda<h1>

<p><b>Cliente:</b> {{$venda->cliente}}</p>
<p><b>Total de Produtos:</b> {{$venda->total_produto}}</p>
<p><b>Data da Venda:</b> {{$venda->data_venda}}</p>

<hr>
@if( isset($errors)  && count($errors) > 0)
    <div class="alert alert-danger">
        @foreach( $errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    </div>

@endif

{!! Form::open(['route' => ['vendas.destroy', $venda->id], 'method' => 'DELETE']) !!}
    {!! Form::submit("Deletar Venda: $venda->name", ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

@endsection
