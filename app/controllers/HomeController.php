<?php

class HomeController extends BaseController {

	protected $layout = 'layouts.master';

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

	public function showHome()
	{
		$this->layout->content = View::make('home');	
	}

	public function showNews()
	{
		$this->layout->content = View::make('news');
	}

	public function showAccount()
	{
		$this->layout->content = View::make('account');
	}
}
