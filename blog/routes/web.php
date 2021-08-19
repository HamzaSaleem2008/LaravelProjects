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
