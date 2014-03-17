<?php

// Route::get('/', function()
// {
// 	return View::make('home');
// });

Route::get('/', array('as' => 'home', 'uses' => 'PostsController@home'));

Route::group(array('before'=>'guest'), function()
{
	Route::group(array('before'=>'csrf'), function()
	{
		Route::post('login', array('as' => 'user.POSTlogin', 'uses' => 'UsersController@POSTlogin'));
		Route::resource('user', 'UsersController');

	});
	Route::get('login', array('as' => 'user.GETlogin', 'uses' => 'UsersController@GETlogin'));

});

Route::get('logout', array('as' => 'logout', function () {
    Auth::logout();

    return Redirect::route('home');
}))->before('auth');


Route::group(array('before' => 'auth'), function()
{
	Route::get('admin', array('as'=>'admin', 'uses'=>function(){
		return View::make('admin/index');
	}));
	Route::get('user/create', array('as' => 'user.create', 'uses' => 'UsersController@create') );
	Route::get('post/{id}/delete', array('as' => 'post.delete', 'uses' => 'PostsController@delete'));
	Route::group(array('before'=>'csrf'), function()
	{
		
	});
	Route::resource('post', 'PostsController');
});