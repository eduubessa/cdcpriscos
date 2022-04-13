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

Route::get('/', 'WelcomeController@index');

Route::get('/articles', function(){
    return "Pagina para os artigos";
});

Route::get('/article/{title}', function($title){
    return "Pagina apenas de um post. Titulo do post : { $title }";
});


Route::group(['prefix' => '/admin/'], function(){

    Route::get('/', function(){
        //return redirect()->route('/admin/dashboard');
    });

    Route::get('/dashboard', function(){
        return view('admin.dashboard.index');
    });
});