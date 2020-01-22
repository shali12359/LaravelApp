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




/*
// Route laravel home page
Route::get('/', function () {
    return view('Welcome');
});

// Route to /hello
Route::get('/hello', function () {
    return '<h1>Hello World 2</h1>';
});

// Route to /about view
Route::get('/about', function () {
    return view('Pages.about');
});

// Pass dynamic values to URL
Route::get('/users/{id}/{name}', function ($id,$name) {
    return 'This is user: '.$name.' with ID: '.$id;
});

// Connect a controller through a route

*/

// Add route to blade
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
