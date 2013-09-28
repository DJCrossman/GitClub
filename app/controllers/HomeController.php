<?php

class HomeController extends BaseController {

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

	public function showWelcome()
	{
		return View::make('hello');
	}


	public function getLogin()
	{
		return View::make('login');
	}

	public function postLogin(){
		$input = Input::all();
		$rules = array('id' => 'required','password' =>'required');
		$v = Validator::make($input,$rules);

		if($v->fails()){
			return Redirect::to('login')->withErrors($v);
		}else {
			$credentials = array('id'=> $input['id'], 'password' => $input['password']);

			if(Auth::attempt($credentials)){
				return Redirect::to('/');
			}else{
				return Redirect::to('login')->withInput()->withErrors('Invalid User And/Or Password');
			}
		}
	}


}