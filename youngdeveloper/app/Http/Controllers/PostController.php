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

class PostController extends Controller {

	public function index() {
		$category = Category::all();
		$posts = Post::orderBy('created_at', 'desc')->paginate(3);
		return view('post.list')->with('posts', $posts)->with('categories', $category);
		/* ->with('title', $title) */
	}

	public function create(Request $request) {
		// if user can post i.e. user is admin or author
		$user = $request->user();
		$categories = Category::all();
		if ($user != null) {
			if ($user->can_post()) {
				return view('post.create')->with('categories', $categories);
			} else {
				return redirect('/');
			}
		} else {
			return redirect('/');
		}
	}

	// action de luu user moi khi form submit
	public function store(Request $request) {
		$allRequest = $request->all();
		$title = $allRequest['title'];
		
		$thumbnail = $allRequest['thumbnail'];
		if ($allRequest['thumbnail'] === null) {
			$filename = 'default/thumbnailDefault.jpg';
		} else {
			$filename = $request->file('thumbnail')->getClientOriginalName();
		}
		Log::error($filename);
		$content = $allRequest['content'];
		$idCategory = $allRequest['idCategory'];
		$idUser = $request->user() -> id;
		
		$dataInsertToDatabase = array(
				'title' => $title,
				'thumbnail' => $filename,
				'content' => $content,
				'idCategory' => $idCategory,
				'idUser' => $idUser
		);
		
		$objPost = new Post();
		$objPost->insert($dataInsertToDatabase);
		
		Helper::uploadImage($thumbnail);
		
		return redirect()->action('PostController@index');
	}

	public function edit($id) {
		$objPost = new Post();
		$getPostById = $objPost->find($id)->toArray();
		return view('post.edit')->with('getPostById', $getPostById);
	}

	public function detail($id) {
		$objPost = new Post();
		$getPostById = $objPost->find($id);
		return view('post.detail')->with('getPostById', $getPostById);
	}

	public function update(Request $request) {
		$allRequest = $request->all();
		
		$id = $allRequest['id'];
		$title = $allRequest['title'];
		/* $thumbnail= $allRequest ['thumbnail']; */
		$content = $allRequest['content'];
		/* $idCategory = $allRequest['idCategory']; */
		
		$objPost = new Post();
		$getPostById = $objPost->find($id);
		$getPostById -> title = $title;
		/* $getPostById->thumbnail= $thumbnail; */
		$getPostById -> content = $content;
		$getPostById->save();
		
		return redirect()->action('PostController@index');
	}

	public function destroy($id) {
		Post::find($id)->delete();
		return redirect()->action('PostController@index');
	}

	public function countCommentByPostID($id) {
		$comments = Comment::where('idPost', $id)->orderBy('created_at', 'desc');
		return count($comments);
	}
}

