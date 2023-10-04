<?php

namespace App\Http\Controllers;

use App\Models\estoque;
use Illuminate\Http\Request;

class EstoquesController extends Controller
{
    public function index(){
        $estoques = Estoque::orderby('id', 'desc')->paginate();
        return view('estoques.index', ['estoques' => $estoques]);
    }

    public function create(){
        return view('estoques.create');
    }


    public function insert(Request $request){
        $estoque = new Estoque();
        $estoque->quantidade = $request->quantidade;
        $estoque->id_produto = $request->id_produto;
        $estoque->save();
        return redirect()->route('estoques');

    }


    public function show($id){
        $estoque = estoque::find($id);
        return view('estoques.show', ['estoque' => $estoque]);


    }

    public function edit(estoque $estoque){
       return view('estoques.edit', ['estoque' => $estoque]);
    }


    public function editar(Request $request, estoque $estoque){

        $estoque->quantidade = $request->quantidade;
        $estoque->id_produto = $request->id_produto;
        $estoque->save();
        return redirect()->route('estoques');

    }


    public function delete(estoque $estoque){
        $estoque->delete();
        return redirect()->route('estoques');
     }

     public function modal($id){
        $estoques = estoque::orderby('id', 'desc')->paginate();
        return view('estoques.index', ['estoques' => $estoques, 'id' => $id]);

     }


}
