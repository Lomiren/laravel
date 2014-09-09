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

/*Route::get('/', function()
{
	$i = ';
	return $i;
	return View::make('hello');
	
});
*/

/* Admin Auth */
Route::group(array('prefix' => 'admin'), function () {
	
	Route::get('login', 'Admin_AuthController@login');
	Route::post('signin', 'Admin_AuthController@signin');
	Route::get('logout', 'Admin_AuthController@logout');

});
/* Admin Auth End */

Route::group(array('prefix' => 'admin', 'before' => 'adminauth'), function () {
	
	Route::controller('/user', 'Admin_UserController');
	Route::controller('/', 'Admin_HomeController');
	
});

//Route::controller('/', 'HomeController');


