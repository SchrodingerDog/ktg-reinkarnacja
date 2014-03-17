<?php 
/**
* 
*/
class UsersController extends BaseController
{
	
	public function GETlogin()
	{
		return View::make('users/login');	
	}

	public function POSTlogin(){
		$auth = Auth::attempt(array(
			'username' => Input::get('login'),
			'password' => Input::get('password')), true
		);
		if(Auth::user()->sa == 1){
			if($auth)return Redirect::route('home');
		}else{ 
			Auth::logout();
			return Redirect::route('user.GETlogin'); 
		}
	}

	public function create(){
		return View::make('users/create');	
	}

	public function store()
	{
		if (!User::isValid(Input::all())) {
			return Redirect::back()->withInput(Input::all())->withErrors(User::$errors);
		}
		$post = new User;
		$post->username = e(Input::get('login'));
		$post->password = Hash::make(e(Input::get('password')));
		$post->save();

		return Redirect::route('post.index');
	}
}