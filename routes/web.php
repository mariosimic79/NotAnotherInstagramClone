<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('galerija');
});



Route::get('hello', function ()
{
    return 'Hello world!';
    
}
        );
        
Route::get('/galerija/{page}' ,'galleryController@paging');

        
Route::get('/upload', 'uploadController@show');
Route::post('/upload', 'uploadController@upload');

Route::get('/formUpload' ,'formController@index');
Route::post('/formUpload', 'formController@form');

Route::get('/login', 'loginController@index');
Route::post('/login', 'loginController@submitLogin');

Route::get('/gallery', 'galleryController@index');

Route::get('/profile', 'profileController@index');
Route::post('/profile', 'profileController@index');

Route::get('/galerijaAdmin', 'galerijaAdminController@index');