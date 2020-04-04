<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return redirect()->route('listar_clientes');
});

/* Rotas para clientes */
Route::get('/clientes/listar', 'ClienteController@telaListar')->name("listar_clientes");

Route::get('/clientes/cadastro', 'ClienteController@telaCadastro')->name("cadastrar_clientes");
Route::post('/clientes/cadastro/efetua', 'ClienteController@adicionar')->name("cadastrar_clientes_efetua");

Route::get('/clientes/alterar/{id}', 'ClienteController@telaAlterar')->name("alterar_clientes");
Route::post('/clientes/alterar/efetua/{id}', 'ClienteController@alterar')->name("alterar_clientes_efetua");

Route::get('/clientes/excluir/{id}', 'ClienteController@excluir')->name("excluir_clientes");



/* Rotas para vendas */
Route::get('/vendas/listar', 'VendaController@telaListar')->name("listar_vendas");

Route::get('/vendas/cadastro', 'VendaController@telaCadastro')->name("cadastrar_venda");
Route::post('/vendas/cadastro/efetua', 'VendaController@adicionar')->name("cadastrar_venda_efetua");

Route::get('/vendas/alterar/{id}', 'VendaController@telaAlterar')->name("alterar_vendas");
Route::post('/vendas/alterar/efetua/{id}', 'VendaController@alterar')->name("alterar_vendas_efetua");

Route::get('/vendas/excluir/{id}', 'VendaController@excluir')->name("excluir_vendas");