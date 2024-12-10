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
        Schema::table('estabelecimentos', function (Blueprint $table) {
            $table->foreign('cpfLojista')->references('cpf')->on('usuarios');
            $table->foreign('codigoCategoria')->references('codigo')->on('cat_estabelecimentos');
        });

        Schema::table('produtos', function (Blueprint $table) {
            $table->foreign('cnpj')->references('cnpj')->on('estabelecimentos');
            $table->foreign('tipoProduto')->references('codigo')->on('cat_produtos');
        });

        Schema::table('pedidos', function (Blueprint $table) {
            $table->foreign('cpfCliente')->references('cpf')->on('usuarios');
            $table->foreign('codCupom')->references('codigo')->on('cupons');
            $table->foreign('cpfEntregador')->references('cpf')->on('usuarios');
        });

        Schema::table('produto_pedido', function (Blueprint $table) {
            $table->foreign('codProduto')->references('codigo')->on('produtos');
            $table->foreign('numPedido')->references('numero')->on('pedidos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('estabelecimentos', function (Blueprint $table) {
            $table->dropForeign(['cpfLojista']);
            $table->dropForeign(['codigoCategoria']);
        });

        Schema::table('produtos', function (Blueprint $table) {
            $table->dropForeign(['cnpj']);
            $table->dropForeign(['tipoProduto']);
        });

        Schema::table('pedidos', function (Blueprint $table) {
            $table->dropForeign(['cpfCliente']);
            $table->dropForeign(['codCupom']);
            $table->dropForeign(['cpfEntregador']);
        });

        Schema::table('produto_pedido', function (Blueprint $table) {
            $table->dropForeign(['codProduto']);
            $table->dropForeign(['numPedido']);
        });
    }
};
