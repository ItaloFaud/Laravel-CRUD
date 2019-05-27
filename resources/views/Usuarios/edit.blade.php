@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1>Atualizar Usuário</h1>
        <div>
            <form class="form-horizontal" method="post" action="{{ route('usuarios.update', ['usuario' => $usuario->id]) }}">
                @csrf
                @method('PUT')
                <label>Nome</label>
                <input class="form-control" type="text" name="nome" value="{{ old('nome', $usuario->nome) }}">
                <br>
                <label>Endereco</label>
                <input class="form-control" type="text" name="endereco" value="{{ old('endereco', $usuario->endereco) }}">
                <br>
                <label>Protocolo</label>
                <input class="form-control" type="text" name="protocolo" value="{{ old('protocolo', $usuario->protocolo) }}">
                <br>
                <label>Status</label>
                <select class="form-control" name="status">
                    <option value="ativo">Ativo</option>
                    <option value="inativo">Inativo</option>
                </select>
                <br>
                <button class="btn btn-outline-success" type="submit">Atualizar</button>
            </form>
        </div>
    </div>
</div>

@endsection