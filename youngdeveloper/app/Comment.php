<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

	protected $table = 'comments';

	public $timestamps = true;

	protected $guarded = [];

	public function post() {
		return $this->belongsTo('App\Post', 'idPost');
	}

	/*
	 * public function author() {
	 * return $this->belongsTo ( 'App\User', 'from_user' );
	 * }
	 */
	public function getContent() {
		return $this -> content;
	}

	public function getCreatedAt() {
		return $this -> created_at;
	}
	
	public function user() {
		return $this -> content;
	}
	
}
