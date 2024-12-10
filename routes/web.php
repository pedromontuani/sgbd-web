<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstabelecimentoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PedidoController;

Route::get('/', [EstabelecimentoController::class, 'index']);

Route::get('/produtos', [ProdutoController::class, 'showByCnpj']);

Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/{cpf}/edit', [UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{cpf}', [UsuarioController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/{cpf}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');


Route::get('/pedidos', [PedidoController::class, 'index']);
