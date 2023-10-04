@extends('layouts.template')
@section('title', 'Editar Categoria')
@section('content')
<div class="container mt-4 d-flex justify-content-center align-items-center flex-column">
    <form method="POST" action="{{route('categorias.editar', $categoria)}}" class="w-50">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="exampleInputEmail1">Nome</label>
            <input type="text" class="form-control" id="" required name="nome" value="{{$categoria->nome}}">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descrição</label>
            <textarea class="form-control" id="" name="descricao" rows="3" required>{{$categoria->descricao}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection
