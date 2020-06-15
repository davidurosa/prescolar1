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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/estudiantes','EstudianteController@inicio')->name('estudiantes')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

 Route::get('/estudiantes/crear','EstudianteController@crear');
Route::post('/estudiantes/crear','EstudianteController@creado');
Route::get('/estudiantes/{id}','EstudianteController@detalles_estudiante');

Route::get('/seccion/{id}', 'EstudianteController@mostrar_seccion');

Route::get('/estudiantes/crear/transporte','EstudianteController@crear_transporte');
Route::post('/estudiantes/crear/transporte','EstudianteController@creados_transporte');


Route::get('/estudiantes/crear/mama','EstudianteController@crear_mama');
 Route::post('/estudiantes/crear/mama','EstudianteController@creados_mama');

Route::get('/estudiantes/crear/papa','EstudianteController@crear_papa');
Route::post('/estudiantes/crear/papa','EstudianteController@creados_papa');
 

Route::get('/estudiantes/crear/encargados','EstudianteController@crear_encargados');
Route::post('/estudiantes/crear/encargados','EstudianteController@creados_encargados');
  

/* Route::get('/estudiantes/crear/reporte_medico','EstudianteController@crear_medico');
Route::post('/estudiantes/crear/reporte_medico','EstudianteController@creados_medico'); */

});


Route::get('/personal', 'EstudianteController@ver_personal')->name('personal');




Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

//reportessssss

Route::get('/reporte_alumno/{id}','EstudianteController@crear_reporte_estudiante');

Route::get('/reportes','EstudianteController@reportes')->name('reportes');


Route::get('/reporte_primer_nivel/1', 'EstudianteController@reporte_seccion1')->name('nivel1');

Route::get('/reporte_segundo_nivel/2', 'EstudianteController@reporte_seccion2')->name('nivel2');

Route::get('/reporte_tercer_nivel/3', 'EstudianteController@reporte_seccion3')->name('nivel3');