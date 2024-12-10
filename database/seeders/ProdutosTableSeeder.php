<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('produtos')->insert([
            'codigo' => 1,
            'nome' => 'Coca-Cola',
            'tamanho' => '350ml',
            'preco' => 3.50,
            'tipoProduto' => 1,
            'cnpj' => '12345678000199',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
