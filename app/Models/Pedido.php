<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'pedidos';

    // Specify the primary key if it doesn't follow Laravel's naming convention
    protected $primaryKey = 'numero';

    // Specify the fillable fields
    protected $fillable = [
        'data',
        'cpfCliente',
        'codCupom',
        'cpfEntregador',
        'horarioEntrega',
    ];
}
