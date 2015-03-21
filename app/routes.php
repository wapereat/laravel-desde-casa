<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function()
{
	return View::make('hello');
});


Route::get('holamundo', 'HolamundoController@actionHolamundo');//la función get me está 
//diciendo que cuando escriba "/holamundo" me redireccione a controlador holamundo y su funcion
//actionholamundo. antes no me corria por que yo esperaba que con la función controller podia
//acceder a la funcion action con el @

Route ::controller('personal','PersonalController');
Route::get('formulario',  'Clase2plantillaController@ver_formulario');
Route::get('grilla','Clase2bGrillasController@ver_grilla');
