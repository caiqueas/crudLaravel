<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class imagem extends Model
{
    protected $table = 'imagem';
    public $timestamps = false;
    use HasFactory;

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'id_produto');
    }
}
