@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1>Cadastrar Usuário</h1>
        <div>
            <form class="form-horizontal" method="post" action="{{route('usuarios.store')}}">
                @csrf
                <label>Nome</label>
                <input class="form-control" type="text" name="nome" >
                <br>
                <label>Endereco</label>
                <input class="form-control" type="text" name="endereco">
                <br>
                <label>Protocolo</label>
                <input class="form-control" type="text" name="protocolo" >
                <br>
                <label>Status</label>
                <select class="form-control" name="status">
                    <option value="ativo">Ativo</option>
                    <option value="inativo">Inativo</option>
                </select>
                <br>
                <button class="btn btn-outline-success" type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
</div>

@endsection