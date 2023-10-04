<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Produto extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

    public static function calcularSomaValores()
    {
        return self::sum('valor');
    }
}
