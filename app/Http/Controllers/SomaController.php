<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class SomaController extends Controller
{
    public function somar()
    {
        $soma = Produto::calcularSomaValores();

        return view('produtos.somar', compact('soma'));
    }
}
