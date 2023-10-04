@extends('layouts.template')
@section('title', 'Categorias')
@section('content')
<?php
$valor_prod = number_format($categoria->valor, 2, ',', '.');
?>
<div class="jumbotron">
  <h1 class="display-4"><?php echo $categoria->nome; ?> </h1>
  <p class="lead"><?php echo $categoria->descricao; ?> </p>
  <hr class="my-4">
  <p><?php echo $categoria->descricao_longa; ?></p>
  <a class="btn btn-primary btn-lg" href="{{route('categorias')}}" role="button">Ver Categorias</a>
</div>
@endsection
