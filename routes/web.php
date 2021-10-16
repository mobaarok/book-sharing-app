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
Route::get('/', 'HomeController@index');


//we don't need to auth user to see just all booklist and a single book, anyone can see it
Route::get('/book', 'BookController@getBookList')->name('booklist');
Route::get('/book/{slug}', 'BookController@getSingleBook')->name('singlebook');

Route::group(['middleware' => "auth"], function () {
    Route::get('/home', 'HomeController@dashboard')->name('home');

    Route::get('/donate', 'BookController@createBook')->name('createbook');
    Route::post('/store-book', 'BookController@storeBook')->name('storebook');

    Route::get('book/edit/{slug}', 'BookController@editBook')->name('editbook');
    Route::post('book/update/{slug}', 'BookController@updateBook')->name('updatebook');

    Route::get('edit-user-info', 'UserController@editUserInfo')->name('editUserInfo');
    Route::post('update-user-info', 'UserController@updateUserInfo')->name('updateUserInfo');
    Route::resource('category', 'CategoryController')->middleware('can:isAdmin');
    // for donate page, to get district by division in donate form fillup
    Route::get('get-district', 'HomeController@getDistrictByDivisionId')->name('getDistrictByDivisionId');
});


Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

// Route::get('login/github', 'Auth\LoginController@redirectToProvider');
// Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');
// Route::group(['as' => "admin.", "prefix" => "admin", "namespace" => "Admin"], function () {
// });
