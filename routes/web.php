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

/*Route::get('/', function () {
    return view('welcome');
});*/ 
   
Route::get('/aboutus', function() { return View::make('layouts/aboutus'); } );

Route::get('/tasks', 'TaskController@listview');

Route::get('/tasks/{task}', 'TaskController@detailview');

Route::get('/','PostsController@index')->name('home'); 

Route::post('/posts','PostsController@store'); 

Route::get('/posts/create','PostsController@create'); 

Route::get('/posts/{post}','PostsController@show'); 

Route::get('/posts/tags/{tag}','TagsController@index'); 

Route::post('/posts/{post}/comments','CommentsController@store');  

Route::delete('/posts/{id}/delete', 'PostsController@destroy');

Route::get('/register','RegistrationController@create');

Route::post('/register','RegistrationController@store');

Route::get('/login', [ 'as' => 'login', 'uses' => 'SessionsController@create']); 

Route::post('/login', 'SessionsController@store'); 

Route::get('/logout','SessionsController@destroy');

//$stripe = resolve('App\Billing\Stripe');