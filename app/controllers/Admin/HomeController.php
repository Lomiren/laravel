<?php

class Admin_HomeController extends AdminController {

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
		$i = 1;
		$y = 123;
		//$i = $_SERVER['LARAVEL_ENV'];
		//return $_SERVER['HTTP_HOST'];
		return $i; 
		return View::make('hello');
	}
	
	public function getWelcome()
	{
		return 'Home Welcome';
	}
	
	public function getTest()
	{
		return 'Home test';
	}

}
