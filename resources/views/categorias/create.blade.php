@extends('layouts.template')
@section('title', 'Criar Categoria')
@section('content')
<div class="container mt-4">
    <form method="POST" action="{{route('categorias.insert')}}">
        @csrf

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" id="" name="nome" required>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descrição</label>
            <textarea class="form-control" id="" name="descricao" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection
