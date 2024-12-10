<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('usuarios')->insert([
            'cpf' => '12345678901',
            'nome' => 'John Doe',
            'endereco' => '123 Main St',
            'dataNascimento' => '1990-01-01',
            'email' => 'john@example.com',
            'sexo' => 'Masculino',
            'cnh' => '12345678901',
            'tipoUsuario' => 'Cliente',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
