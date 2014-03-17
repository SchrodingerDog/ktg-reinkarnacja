<?php

class PostsController extends BaseController {

	public function home()
	{
		$posts = Post::orderBy('created_at', 'desc')->get();
		return View::make('index')->with('posts', $posts);
	}

	public function index()
	{
		$posts = Post::orderBy('created_at', 'desc')->get();
		return View::make('posts/index')->with('posts', $posts);
	}

	public function create()
	{
		return View::make('posts/create');
	}

	public function store()
	{
		if (!Post::isValid(Input::all())) {
			return Redirect::back()->withInput(Input::all())->withErrors(Post::$errors);
		}
		$post = new Post;
		$post->title = e(Input::get('title'));
		$post->content = e(Input::get('content'));
		$post->save();

		return Redirect::route('post.index');
	}

	public function update($id)
	{
		if (!Post::isValid(Input::all())) {
			return Redirect::back()->withInput(Input::all())->withErrors(Post::$errors);
		}
		$post = Post::find($id);
		$post->title = e(Input::get('title'));
		$post->content = e(Input::get('content'));
		$post->save();

		return Redirect::route('post.index');
	}

	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts/edit')->with('post', $post);
	}

	public function delete($id)
	{
		$post = Post::find($id);
		return View::make('posts.delete')->with('post', $post);
	}

	public function destroy($id)
	{
		Post::find($id)->delete();
		return Redirect::route('post.index');
	}
}