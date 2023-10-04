
@extends('layouts.template')
@section('title', 'Somar Produtos')
@section('content')

<div class="jumbotron">
  <h1 class="display-4">Soma de Valores</h1>
  <p class="lead">A soma dos valores dos produtos é: R$ {{ number_format($soma, 2, ',', '.') }}</p>
  <hr class="my-4">
  
</div>
@endsection

