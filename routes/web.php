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
    return view('welcome');
});

Route::get('/imoveis', 'PropertyController@index')->name('imoveis');

Route::prefix('imoveis')->group(function(){
    
    Route::get('/novo', 'PropertyController@create')->name('imoveis.novo');
    Route::post('/store', 'PropertyController@store')->name('imoveis.store');
    
    Route::get('/{name}', 'PropertyController@show')->name('imoveis.show');
    
    Route::get('/editar/{name}', 'PropertyController@editar')->name('imoveis.editar');
    Route::put('/update/{name}', 'PropertyController@update')->name('imoveis.update');
    
    Route::get('/remover/{name}', 'PropertyController@destroy')->name('imoveis.remover');

});



