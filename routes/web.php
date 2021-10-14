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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/book', 'BookController@getBookList')->name('booklist');




    Route::get('/donate', 'BookController@createBook')->name('createbook');
Route::group(['middleware' => "auth"], function () {
    Route::post('/store-book', 'BookController@storeBook')->name('storebook');
 });



// Route::group(['as' => "admin.", "prefix" => "admin", "namespace" => "Admin"], function () {

// });
