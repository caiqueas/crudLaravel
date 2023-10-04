<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\UsuariosCRUDController;
use App\Http\Controllers\categoriasController;
use App\Http\Controllers\PesquisaController;
use App\Http\Controllers\EstoquesController;
use App\Http\Controllers\ImagensController;
use App\Http\Controllers\SomaController;



Route::get('/', HomeController::class)->name('paginaInicial');

Route::get('/paginaInicial', function () {
    return view('paginaInicial');
})->name('paginaInicial');


//CRUD produto

Route::get('produtos/inserir', [ProdutosController::class, 'create'])->name('produtos.inserir');

Route::get('produtos/{id}', [ProdutosController::class, 'show'])->name('produtos.descricao');


Route::get('produtos', [ProdutosController::class, 'index'])->name('produtos');

Route::post('produtos', [ProdutosController::class, 'insert'])->name('produtos.insert');

//EDITAR PRODUTO

Route::get('produtos/{produto}/edit', [ProdutosController::class, 'edit'])->name('produtos.edit');

Route::put('produtos/{produto}', [ProdutosController::class, 'editar'])->name('produtos.editar');

//DELETAR PRODUTO

Route::get('produtos/{produto}/delete', [ProdutosController::class, 'modal'])->name('produtos.modal');

Route::delete('produtos/{produto}', [ProdutosController::class, 'delete'])->name('produtos.delete');



// Login e logout

Route::post('painel', [UsuariosController::class, 'login'])->name('usuarios.login');

Route::get('/logout', [UsuariosController::class, 'logout'])->name('usuarios.logout');


//FILTRO DE PESQUISA NO HEADER

Route::post('/pesquisar', [PesquisaController::class, 'pesquisar'])->name('pesquisar');


Route::get('/resultado/{id}', 'ItemController@mostrarResultados')->name('resultado.show');





//CRUD Usuário

Route::get('usuariosCRUD/inserir', [UsuariosCRUDController::class, 'create'])->name('usuariosCRUD.inserir');

Route::get('usuariosCRUD', [UsuariosCRUDController::class, 'index'])->name('usuariosCRUD');

Route::post('usuariosCRUD', [UsuariosCRUDController::class, 'insert'])->name('usuariosCRUD.insert');



//EDITAR USUÁRIO

Route::get('usuarios/{usuario}/edit', [UsuariosCRUDController::class, 'edit'])->name('usuariosCRUD.edit');

Route::put('usuarios/{usuario}', [UsuariosCRUDController::class, 'editar'])->name('usuariosCRUD.editar');

//DELETAR USUÁRIO

Route::get('usuarios/{usuario}/delete', [UsuariosCRUDController::class, 'modal'])->name('usuariosCRUD.modal');

Route::delete('usuarios/{usuario}', [UsuariosCRUDController::class, 'delete'])->name('usuariosCRUD.delete');


// CRUD CATEGORIA


Route::get('categoria/inserir', [CategoriasController::class, 'create'])->name('categorias.inserir');

Route::get('categorias/{id}', [CategoriasController::class, 'show'])->name('categorias.descricao');


Route::get('categorias', [CategoriasController::class, 'index'])->name('categorias');

Route::post('categorias', [CategoriasController::class, 'insert'])->name('categorias.insert');

//EDITAR CATEGORIA

Route::get('categorias/{categoria}/edit', [CategoriasController::class, 'edit'])->name('categorias.edit');

Route::put('categorias/{categoria}', [CategoriasController::class, 'editar'])->name('categorias.editar');

//DELETAR CATEGORIA

Route::get('categorias/{categoria}/delete', [CategoriasController::class, 'modal'])->name('categorias.modal');

Route::delete('categorias/{categoria}', [CategoriasController::class, 'delete'])->name('categorias.delete');




//CRUD ESTOQUE

Route::get('estoque/inserir', [EstoquesController::class, 'create'])->name('estoques.inserir');

Route::get('estoques/{id}', [EstoquesController::class, 'show'])->name('estoques.descricao');

Route::get('estoques', [EstoquesController::class, 'index'])->name('estoques');

Route::post('estoques', [EstoquesController::class, 'insert'])->name('estoques.insert');

//EDITAR ESTOQUE

Route::get('estoques/{estoque}/edit', [EstoquesController::class, 'edit'])->name('estoques.edit');

Route::put('estoques/{estoque}', [EstoquesController::class, 'editar'])->name('estoques.editar');

//DELETAR ESTOQUE

Route::get('estoques/{estoque}/delete', [EstoquesController::class, 'modal'])->name('estoques.modal');

Route::delete('estoques/{estoque}', [EstoquesController::class, 'delete'])->name('estoques.delete');



//CRUD IMAGEM

Route::get('imagem/inserir', [ImagensController::class, 'create'])->name('imagens.inserir');

Route::get('imagens', [ImagensController::class, 'index'])->name('imagens');

Route::post('imagens', [ImagensController::class, 'insert'])->name('imagens.insert');

//EDITAR IMAGEM

Route::get('imagens/{imagem}/edit', [ImagensController::class, 'edit'])->name('imagens.edit');

Route::put('imagens/{imagem}', [ImagensController::class, 'editar'])->name('imagens.editar');

//DELETAR IMAGEM

Route::get('imagens/{imagem}/delete', [ImagensController::class, 'modal'])->name('imagens.modal');

Route::delete('imagens/{imagem}', [ImagensController::class, 'delete'])->name('imagens.delete');


//FUNCAO DE SOMA DO VALOR DE TODOS ITENS DA TABELA PRODUTOS

Route::get('/somar', [SomaController::class, 'somar'])->name('produtos.somar');





