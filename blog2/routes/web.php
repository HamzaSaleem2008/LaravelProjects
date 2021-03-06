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
Route::get('/hamza1', 'HamzaController@hamza1View');
Route::get('/hamza2', 'HamzaController@hamza2View');
Route::get('/hamza3', 'HamzaController@hamza3View');
Route::get('/hamza4', 'HamzaController@hamza4View');
Route::get('/hamza5', 'HamzaController@hamza5View');
Route::get('/hamza6', 'HamzaController@hamza6View');
Route::get('/hamza7', 'HamzaController@hamza7View');
Route::get('/hamza8', 'HamzaController@hamza8View');
Route::get('/hamza9', 'HamzaController@hamza9View');
Route::get('hamza10', 'HamzaController@hamza10View');


Route::get('/tj1', 'Hamza1Controller@index');
Route::get('/tj2', 'Hamza2Controller@index');
Route::get('/tj3', 'Hamza3Controller@index');
Route::get('/tj4', 'Hamza4Controller@index');
Route::get('/tj5', 'Hamza5Controller@index');
Route::get('/tj6', 'Hamza6Controller@index');
Route::get('/tj7', 'Hamza7Controller@index');
Route::get('/tj8', 'Hamza8Controller@index');
Route::get('/tj9', 'Hamza9Controller@index');
Route::get('/tj10', 'Hamza10Controller@index');


Route::get('/countries', 'CountriesController@index');
Route::get('/countries/create', 'CountriesController@create');
Route::post('/countries/store', 'CountriesController@store');
Route::get('/countries/show/{id}', 'CountriesController@show');
Route::get('/countries/edit/{id}', 'CountriesController@edit');
Route::post('/countries/delete/{id}', 'CountriesController@destroy');

Route::get('/states', 'StatesController@index');
Route::get('/states/create', 'StatesController@create');
Route::post('/states/store', 'StatesController@store');
Route::get('/states/show/{id}', 'StatesController@show');
Route::get('/states/edit/{id}', 'StatesController@edit');
Route::post('/states/delete/{id}', 'StatesController@destroy');

Route::get('/cities', 'CitiesController@index');
Route::get('/cities/create', 'CitiesController@create');
Route::post('/cities/store', 'CitiesController@store');
Route::get('/cities/show/{id}', 'CitiesController@show');
Route::get('/cities/edit/{id}', 'CitiesController@edit');
Route::post('/cities/update/{id}', 'CitiesController@update');
Route::post('/cities/delete/{id}', 'CitiesController@destroy');

Route::get('/cars', 'CarsController@index');
Route::get('/cars/create', 'CarsController@create');
Route::get('/cars/edit/{id}', 'CarsController@edit');
Route::post('/cars/store', 'CarsController@store');
Route::get('/cars/show/{id}', 'CarsController@show');
Route::post('/cars/destroy/{id}', 'CarsController@destroy');
Route::post('/cars/update/{id}', 'CarsController@update');

Route::get('/paksweets', 'PakSweetsController@index');

//MrpmwebsiteRoutes
Route::get('/mrpmautos', 'MrpmautosController@index')->name('mrpmautos.index');
Route::get('/mrpmautos/about', 'MrpmautosController@about')->name('mrpmautos.about');
Route::get('/mrpmautos/contact', 'MrpmautosController@contact')->name('mrpmautos.contact');
Route::get('/mrpmautos/services', 'MrpmautosController@services')->name('mrpmautos.services');
Route::get('/mrpmautos/team', 'MrpmautosController@team')->name('mrpmautos.team');
