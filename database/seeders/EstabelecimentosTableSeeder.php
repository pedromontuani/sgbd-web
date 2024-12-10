<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstabelecimentosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('estabelecimentos')->insert([
            'cnpj' => '12345678000199',
            'nome' => 'Best Restaurant',
            'codigoCategoria' => 1,
            'endereco' => '456 Main St',
            'taxaEntrega' => 5.00,
            'cpfLojista' => '12345678901',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
