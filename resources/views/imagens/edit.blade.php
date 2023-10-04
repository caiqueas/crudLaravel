@extends('layouts.template')
@section('title', 'Editar Imagens')
@section('content')
<div class="container mt-4 d-flex justify-content-center align-items-center flex-column">
    <form method="POST" action="{{route('imagens.editar', $imagem)}}" class="w-50">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Url</label>
                    <input type="url" class="form-control" id="" name="url" value="{{$imagem->url}}" required>
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
