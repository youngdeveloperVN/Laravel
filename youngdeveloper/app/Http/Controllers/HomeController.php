<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use View;
use App\User;
use Auth;
use Log;
use App\Category;
use Input;
use Helper;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//     public function __construct()
//     {
//         $this->middleware('auth');
//     }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
    	
    	$category = Category::all();
    	$posts = Post::orderBy('created_at', 'desc')->paginate(3);
    	return view('home')->with('posts', $posts)->with('categories', $category);
    	/* ->with('title', $title) */
    }
    
    public function contact() {
    	return view('layouts.contact');
    }
    
}
