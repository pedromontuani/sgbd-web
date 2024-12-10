<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'estabelecimentos';

    // Specify the primary key if it doesn't follow Laravel's naming convention
    protected $primaryKey = 'cnpj';

    // Specify the primary key type if it's not an incrementing integer
    public $incrementing = false;
    protected $keyType = 'string';

    // Specify the fillable fields
    protected $fillable = [
        'cnpj',
        'nome',
        'codigoCategoria',
        'endereco',
        'taxaEntrega',
        'cpfLojista',
    ];
}
