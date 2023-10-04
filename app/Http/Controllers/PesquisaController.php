<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\usuario;
use Illuminate\Http\Request;
use App\Models\produto;
use App\Models\categoria;


class PesquisaController extends Controller
{
    public function pesquisar(Request $request)
    {
        //dd($request->q);
        $termoPesquisa = $request->q;

        

        // Realize a lógica da pesquisa para obter os resultados
        $resultadosproduto = produto::where('nome', 'LIKE', '%' . $termoPesquisa . '%')->get();
        $resultadoscategoria = categoria::where('nome', 'LIKE', '%' . $termoPesquisa . '%')->get();
        $resultadosusuario = usuario::where('nome', 'LIKE', '%' . $termoPesquisa . '%')->get();

        if($resultadosproduto){
            $resultados = $resultadosproduto;
        }else if($resultadoscategoria){
            $resultados = $resultadoscategoria;
        }else if($resultadosusuario){
            $resultados = $resultadosusuario;
        }
        return view('resultados_pesquisa', ['termoPesquisa' => $termoPesquisa, 'resultados' => $resultados]);


    }
}
