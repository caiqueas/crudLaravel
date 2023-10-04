@extends('layouts.template')
@section('title', 'Criar Usuário')
@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="{{route('usuariosCRUD.insert')}}">
                @csrf


                <div class="form-group">
                <label for="exampleInputNome">Nome</label>
                <input type="text" class="form-control" id="" name="nome" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="" name="email" required>
            </div>

            <div class="form-group">
                <label for="exampleInputSenha">Senha</label>
                <input type="password" class="form-control" id="" name="senha" required>
            </div>

            <div class="form-group">
                <label for="exampleInputNivel">Nível</label>
                <input type="text" class="form-control" id="" name="nivel" required>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>

</div>
@endsection
