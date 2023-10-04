<?php
namespace App\Http\Controllers;

use App\Models\Resultado;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function mostrarResultados($id)
    {
        // Lógica para buscar os resultados com base no ID
        $resultados = Resultado::where('id', $id)->get();

        return view('resultados_pesquisa', compact('resultados'));
    }
}
