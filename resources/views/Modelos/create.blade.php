@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1>Cadastrar Carro</h1>
        <div>
            <form class="form-horizontal" method="post" action="{{route('carro.store')}}">
                @csrf
                <label>Modelo</label>
                <input class="form-control" type="text" name="modelo">
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