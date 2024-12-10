<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('cpf', 11)->primary();
            $table->string('nome', 80);
            $table->string('endereco', 255);
            $table->date('dataNascimento');
            $table->string('email', 100)->unique();
            $table->enum('sexo', ['Masculino', 'Feminino', 'Outro']);
            $table->string('cnh', 11)->unique()->nullable();
            $table->enum('tipoUsuario', ['Entregador', 'Lojista', 'Cliente']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};