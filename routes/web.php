<?php

use Illuminate\Support\Facades\Route;
// use Barryvdh\Snappy\Facades\SnappyPdf::class;




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

Route::get('layout', function () {
    return view('layout.layout');
});

Route::get('dash', function () {
    return view('dashboard');
});

Route::get('dash', function () {
    return view('layout.dash');
});
 
Route::resource('blogs','BlogController');
Route::resource('supplier','SupplierController');

Route::get('search2','search2Controller@index')->name('search2');
Route::get('select2-autocomplete','search2Controller@autocomplete');

Route::get('autocomplete','search2Controller@index_2');
Route::POST('fetchdata','search2Controller@fetchdata')->name('search.fetchdata');

Route::get('duminda','BlogController@test');

Route::get('gettabledata','dbcontroller@getdata');
Route::get('getindexpagetable','dbController@indexpagetable')->name('ajax.indexpagetable'); 

Route::any('/remove/{id}', 'dbController@remove')->name('ajax.remove');


    

Route::get('/testpdf', 'PDFController@test');
