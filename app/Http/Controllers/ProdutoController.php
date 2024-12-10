<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Estabelecimento;

class ProdutoController extends Controller
{
    public function showByCnpj(Request $request)
    {
        $cnpj = $request->query('cnpj');

        // Query the produtos table
        $produtos = Produto::where('cnpj', $cnpj)->get();

        // Query the estabelecimentos table
        $estabelecimento = Estabelecimento::where('cnpj', $cnpj)->first();

        // Pass data to the view
        return view('cardapio', compact('produtos', 'estabelecimento'));
    }
}
