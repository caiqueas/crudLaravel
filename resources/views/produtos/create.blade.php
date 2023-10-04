@extends('layouts.template')
@section('title', 'Criar Produto')
@section('content')

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="{{route('produtos.insert')}}">
                @csrf


                <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" id="" name="nome" required>
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
                <input type="number" class="form-control" step="0.01" min="0" id="" name="valor" required>
            </div>



            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descrição</label>
                <textarea class="form-control" id="" name="descricao" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>


</div>
@endsection
