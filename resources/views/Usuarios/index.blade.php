@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="jumbotron">
        <h1>Usuarios Cadastrados</h1>
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Endereco</th>
      <th scope="col">Protocolo</th>
      <th scope="col">Status</th>
      <th scope="col">Funções</th>
    </tr>
  </thead>
  <tbody>
  @foreach($usuarios as $usuario)   
    <tr>    
      <th scope="row">{{ $usuario->id }}</th>
      <td>{{ $usuario->nome }}</td>
      <td>{{ $usuario->endereco }}</td>
      <td>{{ $usuario->protocolo }}</td>
      <td>{{ $usuario->status }}</td>
      <td>
        <a href="{{ route('usuarios.show', ['usuario' => $usuario->id]) }}">Visualizar</a>
        <a href="{{ route('usuarios.edit', ['usuario' => $usuario->id]) }}">Editar</a>
        <a href="{{ route('usuario.destroy', ['usuario' => $usuario->id]) }}">Excluir</a>
    </td>
    </tr>
    
        @endforeach
    
  </tbody>
</table>
        
    </div>
</div>

@endsection