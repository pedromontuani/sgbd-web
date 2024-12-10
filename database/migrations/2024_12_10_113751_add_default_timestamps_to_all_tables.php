<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $tables = ['usuarios', 'estabelecimentos', 'cat_estabelecimentos', 'cat_produtos', 'produtos', 'cupons', 'pedidos', 'produto_pedido'];

        foreach ($tables as $table) {
            // Update existing NULL values to current timestamp
            DB::table($table)->whereNull('created_at')->update(['created_at' => DB::raw('CURRENT_TIMESTAMP')]);
            DB::table($table)->whereNull('updated_at')->update(['updated_at' => DB::raw('CURRENT_TIMESTAMP')]);

            // Alter the columns to set default values
            Schema::table($table, function (Blueprint $table) {
                $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable(false)->change();
                $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->nullable(false)->change();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $tables = ['usuarios', 'estabelecimentos', 'cat_estabelecimentos', 'cat_produtos', 'produtos', 'cupons', 'pedidos', 'produto_pedido'];

        foreach ($tables as $table) {
            Schema::table($table, function (Blueprint $table) {
                $table->timestamp('created_at')->default(null)->nullable()->change();
                $table->timestamp('updated_at')->default(null)->nullable()->change();
            });
        }
    }
};
