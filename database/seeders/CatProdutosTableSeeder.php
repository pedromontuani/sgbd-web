<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatProdutosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('cat_produtos')->insert([
            'codigo' => 1,
            'nome' => 'Bebida',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
