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
	});

	$router->get('admin', 'adminController@showView');

	$router->group([
		'namespace' => 'Admin',
		'middleware' => 'auth',
	], function () {

	});

	// ERROR HANDLING FOR NOW - Working on another solution in Handler.php
	Route::any('/{page?}',function(){
	  return View::make('errors.404');
	})->where('page','.*');
