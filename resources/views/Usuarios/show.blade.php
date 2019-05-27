@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1>Visualizar Usuario</h1>
        <div>
            <p>Você está visualiando o Usuário (<strong>{{ $usuario->id }}</strong>) </p>
            <p>Nome: <strong>{{ $usuario->nome }}</strong></p>
            <p>Endereco: <strong>{{ $usuario->endereco }}</strong></p>
            <p>Protocolo: <strong>{{ $usuario->protocolo }}</strong></p>
            <p>Status: <strong>{{ $usuario->status }}</strong></p>
        </div>
    </div>
</div>

@endsection