@extends('layouts.template')
@section('title', 'Página inicial')
@section('content')
<?php
@session_start();
if(@$_SESSION['id_usuario'] == null){
  echo "<script language='javascript'> window.location='./' </script>";
}
if(!isset($id)){
  $id = "";
}
?>

<style>
      .container-imagem {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 100px;



      }
    </style>

<div class="container-imagem">
  <img src="image/logoAutoPecas.png" alt="Minha Imagem">
</div>
@endsection
