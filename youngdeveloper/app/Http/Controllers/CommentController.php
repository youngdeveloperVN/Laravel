<?php
namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use Log;
use Auth;

class CommentController extends Controller {

	public function index() {
		$allComments = Comment::paginate(3);
		return view('comment.list')->with('allComments', $allComments);
	}

	public function create() {
		return;
	}

	public function store(Request $request) {
		$allRequest = $request->all();
		
		$name = $allRequest['name'];
		$email = $allRequest['email'];
		$content = $allRequest['content'];
		
		$idPost = $allRequest['idPost'];
		$idParentComment = $allRequest['idParentComment'];
		
		$dataInsertToDatabase = array(
				'name' => $name,
				'email' => $email,
				'content' => $content,
				'idPost' => $idPost,
				'idParentComment' => $idParentComment
		);
		
		$objComment = new Comment();
		$objComment->insert($dataInsertToDatabase);
		
		return back()->withInput();
		
	}

	public function edit($id) {
		$objComment = new Comment();
		$getCommentById = $objComment->find($id)->toArray();
		return view('comment.edit')->with('getCommentById', $getCommentById);
	}

	public function detail($id) {
		$objComment = new Comment();
		$getCommentById = $objComment->find($id)->toArray();
		return view('comment.detail')->with('getCommentById', $getCommentById);
	}

	public function update(Request $request) {
		$allRequest = $request->all();
		
		$id = $allRequest['id'];
		$name = $allRequest['name'];
		/* $email= $allRequest ['email']; */
		$content = $allRequest['content'];
		/* $idPost = $allRequest['idPost']; */
		
		$objComment = new Comment();
		$getCommentById = $objComment->find($id);
		$getCommentById->title = $name;
		/* $getCommentById->thumbnail= $email; */
		$getCommentById->content = $content;
		$getCommentById->save();
		
		return redirect()->action('CommentController@index');
	}

	public function destroy($id) {
		Comment::find($id)->delete();
		return redirect()->action('CommentController@index');
	}
	
	public static function getSubComment($comment){
		$subcomment = Comment::where('idParentComment', $comment-> id);
		//$subcomment = Comment::all();
		return $subcomment;
	}
}

