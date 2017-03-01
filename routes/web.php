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

    return view('about');

});

Route::get('tasks', ['uses' =>"taskController@index"]);
Route::post('tasks/task',['uses' =>"taskController@store"]);
Route::delete('tasks/task/{id}', ['uses' =>"taskController@remove"]);

Route::get('contact', ['uses' =>"contactController@index"]);
Route::post('contact', ['uses' =>"contactController@store"]);


Route::get('/experiments', function () {

    return view('experiments');

});
Route::get('skills', function (){

	// will be returned as a Json response
	return ['laravel', 'php', 'vue', 'js', 'python', 'mysql', 'jquery', 'wordpress', 'drupal'];
});
