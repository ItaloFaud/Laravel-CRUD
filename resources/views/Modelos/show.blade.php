@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1>Visualizar Carro</h1>
        <div>
            <p>Você está visualiando o modelo({{ $carro->id }}): <strong>{{ $carro->modelo }}</strong></p>
            <p>Status: <strong>{{ $carro->status }}</strong></p>
        </div>
    </div>
</div>

@endsection