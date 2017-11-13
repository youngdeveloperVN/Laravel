<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
	
	// restricts columns from modifying
	protected $guarded = [ ];
	protected $table = 'posts';
	protected $dates = ['expired_at'];
	
	protected $fillable = [ 
			'title',
			'content',
			'thumbnail' 
	];
	public $timestamps = false;
	
	/* private $idUser= 'idUser';
	private $idCategory= 'idCategory';
	private $content = 'content';
	 */
	public function getAllComments() {
		return $this->hasMany ( 'App\Comment', 'idPost' );
	}
	
	// returns the instance of the user who is author of that post
	public function getAuthor() {
		return $this->belongsTo ( 'App\User', 'idUser' );
	}
	public function getCategory() {
		return $this->belongsTo ( 'App\Category', 'idCategory' );
	}
	
	public function getIdUser(){
		return $this-> idUser;
	}
	
	public function getIdCategory(){
		return $this-> idCategory ;
	}
	
	public function getContents(){
		return $this-> content;
	}
	
	public function getCreateDate(){
		return $this-> created_at;
	}
	
	// setter
	
}