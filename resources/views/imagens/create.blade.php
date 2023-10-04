@extends('layouts.template')
@section('title', 'Cadastrar imagem dos produtos')
@section('content')
<div class="container mt-4">
    <form method="POST" action="{{route('imagens.insert')}}">
        @csrf

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Url da imagem</label>
                    <input type="url" class="form-control" id="" name="url" placeholder="https://examplo.com" size="200" required>
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
