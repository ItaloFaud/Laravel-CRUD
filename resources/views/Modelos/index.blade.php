@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="jumbotron">
        <h1>Carros Cadastrados</h1>
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Modelo</th>
      <th scope="col">Status</th>
      <th scope="col">Funções</th>
    </tr>
  </thead>
  <tbody>
  @foreach($carros as $carro)   
    <tr>
      <th scope="row">{{ $carro->id }}</th>
      <td>{{ $carro->modelo }}</td>
      <td>{{ $carro->status }}</td>
      <td>
        <a href="{{ route('carro.show', ['carro' => $carro->id]) }}">Visualizar</a>
        <a href="{{ route('carro.edit', ['carro' => $carro->id]) }}">Editar</a>
        <a href="{{ route('carro.destroy', ['carro' => $carro->id]) }}">Excluir</a>
    </td>
    </tr>
    
        @endforeach
    
  </tbody>
</table>
        
    </div>
</div>

@endsection