<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index(){
        $categorias = Categoria::orderby('id', 'desc')->paginate();
        return view('categorias.index', ['categorias' => $categorias]);
    }

    public function create(){
        return view('categorias.create');
    }


    public function insert(Request $request){
        $categoria = new Categoria();
        $categoria->nome = $request->nome;
        $categoria->descricao = $request->descricao;
        $categoria->save();
        return redirect()->route('categorias');

    }


    public function show($id){
        $categoria = categoria::find($id);
        return view('categorias.show', ['categoria' => $categoria]);


    }

    public function edit(categoria $categoria){
       return view('categorias.edit', ['categoria' => $categoria]);
    }


    public function editar(Request $request, categoria $categoria){

        $categoria->nome = $request->nome;
        $categoria->descricao = $request->descricao;
        $categoria->save();
        return redirect()->route('categorias');

    }


    public function delete(categoria $categoria){
        $categoria->delete();
        return redirect()->route('categorias');
     }

     public function modal($id){
        $categorias = categoria::orderby('id', 'desc')->paginate();
        return view('categorias.index', ['categorias' => $categorias, 'id' => $id]);

     }


}
