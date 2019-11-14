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
})->name('base.url');

// Route::get('/login','loginController@login');
Route::group(['prefix' => 'pemasukan', 'as' => 'pemasukan.'], function(){
Route::get('/','pemasukanController@pemasukan')->name('index');
Route::get('/entry','pemasukanController@inputpemasukan')->name('entry');
Route::post('/store','pemasukanController@store')->name('store');
Route::get('/edit/{id}','pemasukanController@edit')->name('edit');
Route::post('/update','pemasukanController@update')->name('update');
Route::get('/delete/{id}','pemasukanController@delete')->name('delete');
Route::get('/infaq','pemasukanController@infaq')->name('infaq');
Route::post('/infaq/store','pemasukanController@storeinfaq')->name('infaq.store');
});

Route::group(['prefix' => 'pengeluaran', 'as' => 'pengeluaran.'], function(){
Route::get('/','pengeluaranController@pengeluaran')->name('index');
Route::get('/entry','pengeluaranController@inputpengeluaran')->name('entry');
Route::post('/store','pengeluaranController@store')->name('store');
Route::get('/edit/{id}','pengeluaranController@edit')->name('edit');
Route::post('/update','pengeluaranController@update')->name('update');
Route::get('/delete/{id}','pengeluaranController@delete')->name('delete');
});

Route::group(['prefix' => 'inventaris', 'as' => 'inventaris.'], function(){
Route::get('/','inventarisController@index')->name('index');
Route::get('/create','inventarisController@create')->name('entry');
Route::post('/store','inventarisController@store')->name('store');
Route::get('/edit/{id}','inventarisController@edit')->name('edit');
Route::put('/update/{id}','inventarisController@update')->name('update');
Route::get('/delete/{id}','inventarisController@destroy')->name('delete');
});
Route::get('/saldo', 'pemasukanController@saldo')->name('saldo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
