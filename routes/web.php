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
Auth::routes();

Route::middleware('auth')->group(function() {

    Route::get('/', 'HomeController@index')->name('home');
    
    Route::prefix('klasifikasi')->group(function() {
        Route::get('/', 'KlasifikasiController@index');
        Route::get('/show', 'KlasifikasiController@show');
    });
    
    Route::prefix('data-santri')->group(function() {
        Route::get('/', 'DataSantriController@index');
        Route::get('/{santri}/show', 'DataSantriController@show');
        Route::get('/{santri}/edit', 'DataSantriController@edit');
        Route::get('/tambah', 'DataSantriController@create');
        Route::post('/store', 'DataSantriController@store');
        Route::post('/{santri}/update', 'DataSantriController@update');
        Route::delete('/{santri}/delete', 'DataSantriController@destroy');
    });
    
    Route::prefix('data-testing')->group(function() {
        Route::get('/', 'DataTestingController@index');
        Route::get('/tambah', 'DataTestingController@create');
        Route::get('/{testing}/edit', 'DataTestingController@edit');
        Route::post('/store', 'DataTestingController@store');
        Route::post('/{testing}/update', 'DataTestingController@update');
        Route::delete('/{testing}/delete', 'DataTestingController@destroy');
    });
    
    Route::prefix('profil')->group(function() {
        Route::get('/', 'ProfilController@index');
        Route::post('/update', 'ProfilController@update');
    });
});
