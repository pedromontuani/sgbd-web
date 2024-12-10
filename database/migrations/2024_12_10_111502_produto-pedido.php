<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produto_pedido', function (Blueprint $table) {
            $table->unsignedInteger('numPedido');
            $table->unsignedInteger('codProduto');
            $table->float('precoVendido');
            $table->integer('quantidade');
            $table->primary(['numPedido', 'codProduto']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('produto_pedido');
    }
};
