<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoPedidoTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('produto_pedido')->insert([
            'numPedido' => 1,
            'codProduto' => 1,
            'precoVendido' => 3.50,
            'quantidade' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
