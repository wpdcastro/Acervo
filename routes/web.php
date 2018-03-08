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

Route::middleware(['auth'])->group(function () {

    Route::get('/authors', 'AuthorController@index')->name('authors');
    Route::get('/authors/create', 'AuthorController@create')->name("newAuthor");
    Route::post('/authors/store', 'AuthorController@store')->name("storeAuthor");
    Route::delete('/authors/delete/{id}', 'AuthorController@destroy')->name("deleteAuthor");
    Route::get('/authors/edit/{id}', 'AuthorController@edit');
    Route::post('/authors/update', 'AuthorController@update')->name("updateAuthor");

    Route::get('/publishers', 'PublisherController@index')->name('publishers');
    Route::get('/publishers/create', 'PublisherController@create')->name("newPublisher");
    Route::post('/publishers/store', 'PublisherController@store')->name("storePublisher");
    Route::delete('/publishers/delete/{id}', 'PublisherController@destroy')->name("deletePublisher");
    Route::get('/publishers/edit/{id}', 'PublisherController@edit');
    Route::post('/publishers/update', 'PublisherController@update')->name("updatePublisher");

    Route::get('/books', 'BookController@index')->name('books');
    Route::get('/books/create', 'BookController@create')->name("newBook");
    Route::post('/books/store', 'BookController@store')->name("storeBook");
    Route::delete('/books/delete/{id}', 'BookController@destroy')->name("deleteBook");
    Route::get('/books/edit/{id}', 'BookController@edit');
    Route::post('/books/update', 'BookController@update')->name("updateBook");

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
