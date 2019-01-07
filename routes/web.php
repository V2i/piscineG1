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

Route::get('/index', function () {
    return view('index');
});

Route::get('/test_nesrine', function() {
	return view('home');
});

Route::get('/pageProduit/{CodeProduit}', 'ProduitController@afficherProduit')->name('produit'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/carte',function() {
	return view('carte');
});

Route::get('/basket',function() {
	return view('basket');
});