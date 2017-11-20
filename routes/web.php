<?php

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
    return redirect()->action('HomeController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/produtos', 'ProdutosController@index')->name('produtos');
Route::get('/produtos/criar', 'ProdutosController@criar')->name('produtos_criar');
Route::post('/produtos/salvar', 'ProdutosController@salvar')->name('produtos_salvar');
Route::get('/produtos/editar/{id}', 'ProdutosController@editar')->name('produtos_editar');
Route::post('/produtos/editar/salvar', 'ProdutosController@salvarEdicao')->name('produtos_salvar_edicao');
Route::get('/produto/{id}/status', 'ProdutosController@alterarStatus')->name('produto_status');

Route::get('/categorias', 'CategoriasController@index')->name('categorias');
Route::get('/categorias/editar/{id}', 'CategoriasController@editar')->name('categorias_editar');
Route::post('/categorias/editar/salvar', 'CategoriasController@salvarEdicao')->name('categorias_salvar_edicao');
Route::post('/categorias/salvar', 'CategoriasController@salvar')->name('categorias_salvar');

Route::get('/users', 'UsuariosController@index')->name('users');
Route::get('/users/{id}/editar', 'UsuariosController@editar')->name('users_editar');
Route::post('/users/editar/salvar', 'UsuariosController@salvarEdicao')->name('usuarios_salvar_edicao');
Route::get('/users/{id}/excluir', 'UsuariosController@excluir')->name('users_excluir');


Route::get('/marcas', 'MarcaController@index')->name('marcas');
Route::post('/marcas/salvar', 'MarcaController@salvar')->name('marcas_salvar');
Route::get('/marcas/{id}/editar', 'MarcaController@editar')->name('marcas_editar');
Route::post('/marcas/editar/salvar', 'MarcaController@salvarEdicao')->name('marcas_salvar_edicao');

Route::get('/produto/{id}/imagens/adicionar', 'ImagensController@adicionar')->name('imagens_adicionar');
Route::post('/imagens/salvar', 'ImagensController@salvar')->name('imagens_salvar');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/vitrine/adicionar', 'VitrineController@adicionar')->name('vitrine_adicionar');
Route::post('/vitrine/remover', 'VitrineController@remover')->name('vitrine_remover');
