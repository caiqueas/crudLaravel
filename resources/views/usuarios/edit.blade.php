@extends('layouts.template')
@section('title', 'Editar Usuário')
@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="{{route('usuariosCRUD.editar', $usuario)}}">
                @csrf
                @method('put')

                <div class="form-group">
                <label for="exampleInputNome">Nome</label>
                <input type="text" class="form-control" id="" name="nome" value="{{$usuario->nome}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="" name="email" value="{{$usuario->email}}">
            </div>

            <div class="form-group">
                <label for="exampleInputSenha">Senha</label>
                <input type="password" class="form-control" id="" name="senha" value="{{$usuario->senha}}">
            </div>

            <div class="form-group">
                <label for="exampleInputNivel">Nível</label>
                <input type="text" class="form-control" id="" name="nivel" value="{{$usuario->nivel}}">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
</div>

</div>
@endsection
