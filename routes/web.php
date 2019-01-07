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
})->name('welcome');

Route::get('/index', function () {
    return view('index');
});

Route::get('/pageProduit/{CodeProduit}', 'ProduitController@afficherProduit')->name('produit'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 

Route::get('/carte',function() {
	return view('carte');
})->name('carte');

Route::get('/panier', 'BasketController@afficherPanier')->name('basket');

Route::get('/panier2/{CodeProduit}', 'BasketController@ajouterElement')->name('basket2');

Route::get('/update', function () {
    return view('update');
})->name('update');

Route::get('/search', function () {
    return view('search');
})->name('search');