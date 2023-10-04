@extends('layouts.template')
@section('title', 'Editar Produto')
@section('content')

<div class="container d-flex justify-content-center align-items-center mt-4">
    <form method="POST" action="{{route('produtos.editar', $produto)}}" class="w-50">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="exampleInputEmail1">Nome</label>
            <input type="text" class="form-control" id="" name="nome" value="{{$produto->nome}}" required>
        </div>

        <div class="form-group">
                <label for="exampleFormControlSelect1">Categoria</label>
                <select class="form-control" id="" name="id_categoria">
                    @foreach(\App\Models\Categoria::pluck('nome', 'id') as $id => $nome)
                        <option value="{{ $id }}">{{ $nome }}</option>
                    @endforeach
                </select>
            </div>


        <div class="form-group">
        <label for="exampleInputEmail1">Valor</label>
        <input type="number" class="form-control" id="" min="0" step="0.01" name="valor" value="{{$produto->valor}}" required>
    </div>



    <div class="form-group">
        <label for="exampleFormControlTextarea1">Descrição</label>
        <textarea class="form-control" id="" name="descricao" rows="3" required>{{$produto->descricao}}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

</div>
@endsection
