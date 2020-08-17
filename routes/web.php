<?php   

Route::get('/painel/produtos/tests', 'Painel\ProdutoController@tests');
Route::resource('/painel/produtos', 'Painel\ProdutoController');

Route::get('/painel/clientes/tests', 'Painel\ClienteController@tests');
Route::resource('/painel/clientes', 'Painel\ClienteController');

Route::get('/painel/vendas/tests', 'Painel\VendaController@tests');
Route::resource('/painel/vendas', 'Painel\VendaController');

Route::get('/painel/finalizados/tests', 'Painel\FinalizadoController@tests');
Route::resource('/painel/finalizados', 'Painel\FinalizadoController');


Route::group(['namespace' => 'Site'], function() {

    Route::get('/contato', 'SiteController@contato');
    Route::get('/', 'SiteController@index');

});



