@extends('painel.templates.template')

@section('content')

<h1 class='title-pg'>Deletar Finalização<h1>

<p><b>Produto:</b> {{$finalizado->produto}}</p>
<p><b>Valor do Produto:</b> {{$finalizado->valor_produto}}</p>
<p><b>Quantidade Vendida:</b> {{$finalizado->quantidade_vendida}}</p>


<hr>
@if( isset($errors)  && count($errors) > 0)
    <div class="alert alert-danger">
        @foreach( $errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    </div>

@endif

{!! Form::open(['route' => ['finalizados.destroy', $finalizado->id], 'method' => 'DELETE']) !!}
    {!! Form::submit("Deletar Finalização: $finalizado->produto", ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

@endsection
