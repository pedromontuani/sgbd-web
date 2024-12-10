<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('pedidos')->insert([
            'numero' => 1,
            'data' => now(),
            'cpfCliente' => '12345678901',
            'codCupom' => 'DISCOUNT10',
            'cpfEntregador' => '12345678901',
            'horarioEntrega' => now()->addHour(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
