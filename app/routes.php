<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Home Test Page
Route::get('/', 'ProjectsController@index');

//Edit Project Configurations
Route::get('project/{id}', array(
    'as' => 'editproject',
    'uses' => 'ProjectsController@edit'
));
