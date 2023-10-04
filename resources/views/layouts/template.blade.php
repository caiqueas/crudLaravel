<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <link href="{{ URL::asset('assets/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">



    </head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="{{ route('paginaInicial') }}">Auto Peças</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link" href="{{route('usuariosCRUD')}}">Usuários<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
    <a class="nav-link" href="{{route('categorias')}}">Categorias<span class="sr-only">(current)</span></a>

    <li class="nav-item active">
    <a class="nav-link" href="{{route('produtos')}}">Produtos<span class="sr-only">(current)</span></a>
  </li>

  <li class="nav-item active">
    <a class="nav-link" href="{{route('imagens')}}">Imagem dos produtos<span class="sr-only">(current)</span></a>
  </li>

  </li>

  <li class="nav-item active">
    <a class="nav-link" href="{{route('estoques')}}">Estoque<span class="sr-only">(current)</span></a>


  </li>


</ul>
<form class="form-inline my-2 my-lg-0 mr-auto" method="POST" action="/pesquisar">
@csrf
<input  class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Buscar" name="q">
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
</form>
<ul class="navbar-nav">
  <?php
  @session_start();
   if(@$_SESSION['id_usuario'] == null){ ?>

  <li class="nav-item">
    <a class="nav-link" href="{{route('usuarios.logout')}}">Login</a>
  </li>

  <?php } else{ ?>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <?php echo @$_SESSION['nome_usuario']; ?>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="{{route('usuarios.logout')}}">Sair</a>
    </div>
  </li>

  <?php } ?>

</ul>

</div>
</nav>
@yield('content')
</body>
</html>


<!-- Scripts DataTables -->
<script src="{{ URL::asset('assets/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('assets/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ URL::asset('assets/datatables/datatables-demo.js') }}"></script>
