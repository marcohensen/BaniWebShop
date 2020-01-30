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


//general stuff
Route::get('/welcome', 'HomeController@index')->name('welcome');
Route::get('/recepten', 'RecipeController@index')->name('recepten');

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('/contact', function (){
    return view('contact');
})->name('/contact');

Auth::routes();

//login/register section
Route::get('/user', 'UserController@index')->name('user');
Route::post('/user', 'UserController@update')->name('user.update');

//catalog section
Route::get('/categorie', 'ProductController@index')->name('categorie');
Route::get('/categorie/{categorie}', 'ProductController@producten')->name('product');

//cart stuff
Route::get('/add-to-cart/{id}', 'ProductController@AddToCart')->name('product.addToCart');
Route::get('/reduce/{id}', 'ProductController@reduceCart')->name('reduce');
Route::get('/remove/{id}', 'ProductController@removeCart')->name('remove');
Route::get('/ShoppingCart}','ProductController@getCart')->name('ShoppingCart');
Route::get('/checkout', 'ProductController@checkout')->name('checkout');
Route::post('/checkout', 'ProductController@postCheckout')->name('checkout');

//admin section
Route::get('/admin', function(){
   return view('admin');
})->name('admin');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/aanpassen', 'AdminController@aanpassen')->name('aanpassen');
Route::post('/aanpassen', 'AdminController@update')->name('aanpassen.update');

Route::get('/verwijderen', 'AdminController@verwijderen')->name('verwijderen');