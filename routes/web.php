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
Route::get('/medecin', function (){
    return view('medecin');
});

Route::get('/secretaire', function (){
    return view('secretaire');
});

Route::get('medecins', function (){
    return view('test');
});


Auth::routes();
Route::get('auth/logout', 'Auth\AuthController@logout');

Route::get('/home', 'HomeController@index')->name('home');
/*Route::get('medecins', 'MedecinController@index');
Route::get('medecins/create', 'MedecinController@create');
Route::post('medecins', 'MedecinController@store');
Route::get('medecins/{id}/edit', 'MedecinController@edit');
Route::put('medecins/{id}', 'MedecinController@update');
Route::delete('medecins/{id}', 'MedecinController@destroy');*/

//la norme restfull, dans laravel, cette route est <==> aux 6routes précedentes(+la route show, afficher)
Route::resource('medecins', 'MedecinController');
//la norme restfull, dans laravel, cette route est <==> aux 6routes précedentes(+la route show, afficher)
Route::resource('patients', 'PatientController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
