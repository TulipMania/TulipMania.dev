<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected $fillable = array('username', 'email', 'password');

	public static $rules = [
		'user_input' => 'required',
		'password' => 'required'
	];

    public static $signUpRules = array(
    	'newEmail'     => 'email|required|max:200',
    	'newUser'  => 'required|max:200',
    	'newPass'  => 'required|max:200',
    	'confirmPass' =>'required|same:newPass'	
	);

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	// sets password and hashes it
	public function setPasswordAttribute($value)
	{
		$this->attributes['password'] = Hash::make($value);
	}

}
