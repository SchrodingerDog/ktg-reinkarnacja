<?php
class Post extends Eloquent{
	protected $fillable = ['title', 'content'];
	protected $table = 'posts';
	public static $rules = [
	'title'=>'required', 
	'content'=>'required'];
	public static $errors;
	protected static $messages = array(
    'required' => 'Pole :attribute jest wymagane.');
	public static function isValid($input)
	{
		$validation = Validator::make($input, static::$rules, static::$messages);
		if ($validation->passes()) {
			return true;
		}
		static::$errors = $validation->messages();
		return false;
	}
}