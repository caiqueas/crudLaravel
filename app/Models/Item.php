<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // Defina as configurações do modelo e a tabela correspondente, se necessário
    protected $table = 'itens';

    // Defina os atributos fillable (preenchíveis) se você estiver usando a atribuição em massa
    protected $fillable = ['nome', 'descricao', 'preco'];
}
