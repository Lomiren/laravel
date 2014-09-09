<?php

class Admin_UserController extends AdminController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	
	public function getIndex()
	{
		$i = 'User';
		$y = 123;
		//$i = $_SERVER['LARAVEL_ENV'];
		//return $_SERVER['HTTP_HOST'];
		return $i; 
		returnView::make('hello');
	}
	
	public function getWelcome()
	{
		return 'user welcome';
	}
	
	public function getTest()
	{
		return 'user test';
	}

}
