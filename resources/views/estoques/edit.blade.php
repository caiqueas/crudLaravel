@extends('layouts.template')
@section('title', 'Editar Estoque')
@section('content')
<div class="container mt-4 d-flex justify-content-center align-items-center flex-column">
    <form method="POST" action="{{route('estoques.editar', $estoque)}}" class="w-50">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Quantidade</label>
                    <input type="number" class="form-control" id="" name="quantidade" min="0" value="{{$estoque->quantidade}}" required>
                </div>
            </div>
        </div>

        <div class="form-group">
                <label for="exampleFormControlSelect1">Produto</label>
                <select class="form-control" id="" name="id_produto">
    @foreach(\App\Models\Produto::pluck('nome', 'id') as $id => $nome)
        <option value="{{ $id }}">{{ $nome }}</option>
    @endforeach
</select>

            </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection
