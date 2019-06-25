<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
    // return "Hi you";
});

// Route::get('/post/{id}', function ($id) { 
//     return $id;  
// });

// Route::get('admin/posts/example', array('as'=>'admin.home', function() {
//     $url = route('admin.home');
//     return $url;
// }));
// Route::group(['middleware' => ['web']], function () {

// });


// Route::get('/post/{id}', 'PostsController@index');

// Route::resource('posts', 'PostsController');

Route::get('/contact', 'PostsController@contact');

// Route::get('posts/{id}'); 