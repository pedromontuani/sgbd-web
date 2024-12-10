<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    public function index()
    {
        // Perform the Query
        $pedidos = Pedido::all();

        // Pass Data to the View
        return view('pedidos.index', compact('pedidos'));
    }
}
