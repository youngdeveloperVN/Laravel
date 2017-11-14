<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PostController extends Controller {
	//
	public function premiumdresses($id) {
		return view('layouts.premiumdresses.tut'.$id);
	}
	
	public function weddinggowns($id) {
		$id = $request -> id;
		return view('layouts.weddinggowns.tut'.$id);
	}
	
}
