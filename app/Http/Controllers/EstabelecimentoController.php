<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estabelecimento;

class EstabelecimentoController extends Controller
{
    public function index()
    {
        // Step 2: Perform the Query
        $estabelecimentos = Estabelecimento::all();

        // Step 3: Pass Data to the View
        return view('welcome', compact('estabelecimentos'));
    }
}
