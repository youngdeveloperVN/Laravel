<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use Notifiable;
	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $table = 'users';
	protected $fillable = [
			'name', 'email', 'password',
	];
	
	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
			'password', 'remember_token',
	];
	
	public function getName(){
		return $this -> name; 
	}
	
	public function setName(){
		return 'name' -> $this;
	}
	
	
	/* Get username by id */
	public function getUsernameByPost()
	{
		return $this->belongsTo('Post', 'idUser');
	}
	
	
	// user has many posts
	public function posts()
	{
		return $this->hasMany('App\Post','idUser');
	}
	
	public function is_admin()
	{
		$role = $this->role;
		if($role == 'admin')
		{
			return true;
		}
		return false;
	}
	
	public function can_post()
	{
		$role = $this->role;
		if($role == 'author' || $role == 'admin')
		{
			return true;
		}
		return false;
	}
	
	
}