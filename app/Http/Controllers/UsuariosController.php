<?php

namespace App\Http\Controllers;

use App\Models\produto;
use App\Models\usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function login(Request $request){

        $email = $request->email;
        $senha = $request->senha;

        $usuarios = usuario::where('email', '=', $email)->where('senha', '=', $senha)->first();

        if(@$usuarios->id != null){
            @session_start();
            $_SESSION['id_usuario'] = $usuarios->id;
            $_SESSION['nome_usuario'] = $usuarios->nome;
            $_SESSION['nivel_usuario'] = $usuarios->nivel;

            if($_SESSION['nivel_usuario'] == 'admin'){
                return view('produtos.create');
            }else{
                return view('paginaInicial');
            }

        }else{
            return view('home');
        }
    }


    public function logout(){
       @session_start();
       @session_destroy();
       return view('home');
    }

}
