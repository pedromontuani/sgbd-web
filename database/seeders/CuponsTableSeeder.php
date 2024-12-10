<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CuponsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('cupons')->insert([
            'codigo' => 'DISCOUNT10',
            'validade' => '2024-12-31 23:59:59',
            'valor' => 10.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
