<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'produtos';

    // Specify the primary key if it doesn't follow Laravel's naming convention
    protected $primaryKey = 'codigo';

    // Specify the fillable fields
    protected $fillable = [
        'nome',
        'tamanho',
        'preco',
        'tipoProduto',
        'cnpj',
    ];
}
