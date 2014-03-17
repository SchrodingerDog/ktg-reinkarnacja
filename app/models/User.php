<?php
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {
	public $timestamps = false;
	protected $fillable = ['login', 'password'];
	protected $table = 'users';
	public static $rules = [
	'login'=>'required', 
	'password'=>'required'];
	public static $errors;
	protected static $messages = array(
    'required' => 'Pole :attribute jest wymagane.');
    protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	public function getReminderEmail()
	{
		return $this->email;
	}

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