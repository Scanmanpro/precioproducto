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
    return view('index');
});

Route::get('productos',function(){
	return view('productos');
});

Route::get('contacto',function(){
	return view('contacto');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Rutas zona privada:
Route::get('categorias','CategoryController@listar')->name('categorias.listar');
Route::post('categorias','CategoryController@agregar')->name('categorias.agregar');
Route::get('categorias.eliminar/{id}','CategoryController@eliminar')->name('categorias.eliminar');
Route::get('categorias.editar/{id}','CategoryController@editar')->name('categorias.editar');
Route::post('categorias.actualizar','CategoryController@actualizar')->name('categorias.actualizar');


Route::get('webs','WebController@listar')->name('webs.listar');
Route::post('webs','WebController@agregar')->name('webs.agregar');
Route::get('webs.eliminar/{id}','WebController@eliminar')->name('webs.eliminar');
Route::get('webs.editar/{id}','WebController@editar')->name('webs.editar');
Route::post('webs.actualizar','WebController@actualizar')->name('webs.actualizar');
