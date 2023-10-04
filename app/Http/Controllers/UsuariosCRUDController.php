<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Models\usuariosCRUD;
use Illuminate\Http\Request;

class usuariosCRUDController extends Controller
{
    public function index(){
        $usuariosCRUD = usuario::orderby('id', 'desc')->paginate();
        return view('usuarios.index', ['usuarios' => $usuariosCRUD]);
    }

    public function create(){
        return view('usuarios.create');
    }


    public function insert(Request $request){
        $usuarios = new usuario();
        $usuarios->nome = $request->nome;
        $usuarios->email = $request->email;
        $usuarios->senha = $request->senha;
        $usuarios->nivel = $request->nivel;
        $usuarios->save();
        return redirect()->route('usuariosCRUD');

    }


    public function edit(usuario $usuario){
       return view('usuarios.edit', ['usuario' => $usuario]);
    }


    public function editar(Request $request, usuario $usuario){

        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->senha = $request->senha;
        $usuario->nivel = $request->nivel;
        $usuario->save();
        return redirect()->route('usuariosCRUD');

    }


    public function delete(usuario $usuario){
        $usuario->delete();
        return redirect()->route('usuariosCRUD');
     }

     public function modal($id){
        $usuario = usuario::orderby('id', 'desc')->paginate();
        return view('usuarios.index', ['usuarios' => $usuario, 'id' => $id]);

     }


}
