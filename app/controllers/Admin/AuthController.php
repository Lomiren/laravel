<?php

class Admin_AuthController extends Controller {

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
	
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			//$i = 
			$this->layout = View::make($this->layout);
		}
	}
	
	public function login()
	{
		return View::make('Admin.Auth.login'); 
	}
	
	public function signin()
	{
		if (Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password')))) {
			return Redirect::to('admin')->with('message', 'You are now logged in!');
		} else {
			return Redirect::to('admin/login')
			->with('message', 'Your username/password combination was incorrect')
			->withInput();
		} 
	}
	
	public function logout()
	{
		Auth::logout();
		return Redirect::to('admin/login')->with('message', 'Your are now logged out!');
	}


}
