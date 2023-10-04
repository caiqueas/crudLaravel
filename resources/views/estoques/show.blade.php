@extends('layouts.template')
@section('title', 'Estoques')
@section('content')
<?php
$valor_prod = number_format($estoque->valor, 2, ',', '.');
?>
<div class="jumbotron">
  <h1 class="display-4"><?php echo $estoque->nome; ?> </h1>
  <p class="lead"><?php echo $estoque->descricao; ?> </p>
  <hr class="my-4">
  <p><?php echo $estoque->descricao_longa; ?></p>
  <a class="btn btn-primary btn-lg" href="{{route('estoques')}}" role="button">Ver Estoque</a>
</div>
@endsection
