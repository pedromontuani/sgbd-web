<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatEstabelecimentosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('cat_estabelecimentos')->insert([
            'codigo' => 1,
            'nome' => 'Restaurante',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
