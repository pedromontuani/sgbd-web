<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'usuarios';

    // Specify the primary key if it doesn't follow Laravel's naming convention
    protected $primaryKey = 'cpf';

    // Specify the primary key type if it's not an incrementing integer
    public $incrementing = false;
    protected $keyType = 'string';

    // Specify the fillable fields
    protected $fillable = [
        'cpf',
        'nome',
        'endereco',
        'dataNascimento',
        'email',
        'sexo',
        'cnh',
        'tipoUsuario',
    ];
}
