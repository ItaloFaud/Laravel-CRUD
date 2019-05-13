@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1>Atualizar Carro</h1>
        <div>
            <form class="form-horizontal" method="post" action="{{ route('carro.update', ['carro' => $carro->id]) }}">
                @csrf
                @method('PUT')
                <label>Modelo</label>
                <input class="form-control" type="text" name="modelo" value="{{ old('modelo', $carro->modelo) }}">
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