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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/hamza', 'HamzaController@hamzaView');
Route::get('/hamza1', 'HamzaController@hamza1view');
Route::get('/hamza2', 'HamzaController@hamza2view');
Route::get('/tomandjerry', 'Hamza1Controller@index');
Route::get('/abcd', 'Hamza2Controller@index');

Route::get('/countries', 'CountriesController@index');
Route::get('/countries/create', 'CountriesController@create');
Route::post('/countries/store', 'CountriesController@store');
Route::get('/countries/show/{id}', 'CountriesController@show');
Route::get('/countries/edit/{id}', 'CountriesController@edit');
Route::post('/countries/update/{id}', 'CountriesController@update');
Route::post('/countries/delete/{id}', 'CountriesController@destroy');

Route::get('/cities', 'CitiesController@index');
Route::get('/cities/create', 'CitiesController@create');
Route::post('/cities/store', 'CitiesController@store');
Route::get('/cities/show/{id}', 'CitiesController@show');

//PakSweetsRoute
Route::get('/paksweets',  'PakSweetsController@index');

//MrpmwebsiteRoutes
Route::get('/mrpmautos', 'MrpmautosController@index')->name('mrpmautos.index');
