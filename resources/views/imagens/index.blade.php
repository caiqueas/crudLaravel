@extends('layouts.template')
@section('title', 'Imagens')
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
.img-padrao {
  width: 100px; /* largura desejada */
  height: auto; /* altura será ajustada proporcionalmente */
}
</style>

<div class="container">

<a href="{{route('imagens.inserir')}}" type="button" class="mt-4 mb-4 btn btn-success">Inserir Imagens</a>

<!-- DataTales Example -->
<div class="card shadow mb-4">

<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Imagem</th>
          <th>Produto</th>
          <th>Ações</th>
        </tr>
      </thead>

      <tbody>
      @foreach($imagens as $imagem)
         <tr>
         <td><img src="{{$imagem->url}}" alt="Imagem" class="img-padrao"></td>

            <td>{{$imagem->produto ? $imagem->produto->nome : 'Sem imagem'}}</td>

            <td>
            <a href="{{route('imagens.edit', $imagem)}}"><i class="fas fa-edit text-info mr-1"></i></a>
            <a href="{{route('imagens.modal', $imagem)}}"><i class="fas fa-trash text-danger mr-1"></i></a>
            </td>
        </tr>
        @endforeach
      </tbody>
  </table>
</div>
</div>
</div>





</div>

<script type="text/javascript">
  $(document).ready(function () {
    $('#dataTable').dataTable({
      "ordering": false
    })
  });
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deletar Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Deseja Realmente Excluir este Registro?

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <form method="POST" action="{{route('imagens.delete', $id)}}">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
if(@$id != ""){
  echo "<script>$('#exampleModal').modal('show');</script>";
}
?>

@endsection
