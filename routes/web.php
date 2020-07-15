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
    return view('cabeca');
});


Route::get('/listar', 'cadastroController@show');

Route::get('/form', 'cadastroController@index');  

//Route::get('/dependente{id}', 'clienteDependente@show');
Route::get('/dependente/{id}', 'clienteDependente@show');

Route::post('/ClienteNovo', 'cadastroController@store');

Route::post('/novodependente/{id}','clienteDependente@store');






