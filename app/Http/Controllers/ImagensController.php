<?php

namespace App\Http\Controllers;

use App\Models\imagem;
use Illuminate\Http\Request;

class ImagensController extends Controller
{
    public function index(){
        $imagens = Imagem::orderby('id', 'desc')->paginate();
        return view('imagens.index', ['imagens' => $imagens]);
    }

    public function create(){
        return view('imagens.create');
    }


    public function insert(Request $request){
        $imagem = new Imagem();
        $imagem->url = $request->url;
        $imagem->id_produto = $request->id_produto;
        $imagem->save();
        return redirect()->route('imagens');

    }


    public function show($id){
        $imagem = imagem::find($id);
        return view('imagens.show', ['imagem' => $imagem]);


    }

    public function edit(imagem $imagem){
       return view('imagens.edit', ['imagem' => $imagem]);
    }


    public function editar(Request $request, imagem $imagem){

        $imagem->url = $request->url;
        $imagem->id_produto = $request->id_produto;
        $imagem->save();
        return redirect()->route('imagens');

    }


    public function delete(imagem $imagem){
        $imagem->delete();
        return redirect()->route('imagens');
     }

     public function modal($id){
        $imagens = imagem::orderby('id', 'desc')->paginate();
        return view('imagens.index', ['imagens' => $imagens, 'id' => $id]);

     }


}
