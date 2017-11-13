<?php
namespace App\Http\Controllers;
use App\User;
use App\Post;
use Illuminate\Http\Request;
use View;

class UserController extends Controller {

	public function index() {
		$objUser = new User();
		$allUsers = $objUser->all()->toArray();
		return view('user.list')->with('allUsers', $allUsers);
	}

	public function create() {
		return view('auth/register');
	}

	// action de luu user moi khi form submit
	public function store(Request $request) {
		$allRequest = $request->all();
		$name = $allRequest['name'];
		$email = $allRequest['email'];
		
		$dataInsertToDatabase = array(
				'name' => $name,
				'email' => $email
		);
		
		$objUser = new User();
		$objUser->insert($dataInsertToDatabase);
		
		return redirect()->action('UserController@index');
	}

	public function edit($id) {
		$objUser = new User();
		$getUserById = $objUser->find($id)->toArray();
		return view('user.edit')->with('getUserById', $getUserById);
	}

	public function update(Request $request) {
		$allRequest = $request->all();
		
		$idUser = $allRequest['id'];
		$name = $allRequest['name'];
		$email = $allRequest['email'];
		
		$objUser = new User();
		$getUserById = $objUser->find($idUser);
		$getUserById->name = $name;
		$getUserById->email = $email;
		$getUserById->save();
		
		return redirect()->action('UserController@index');
	}

	public function destroy($id) {
		User::find($id)->delete();
		return redirect()->action('UserController@index');
	}

	public function addmin() {
		return view('admin.dashboard');
	}

	public function getPostsByUserID($id) {
		$posts = Post::where('idUser', $id)->orderBy('created_at', 'desc')->paginate(
				5);
		return view('post.list')->with('posts', $posts);
	}

	public function profile(Request $request, $id) {
		$data['user'] = User::find($id);
		if (! $data['user'])
			return redirect('/');
		
		if ($request->user() && $data['user']->id == $request->user()->id) {
			$data['author'] = true;
		} else {
			$data['author'] = null;
		}
		$data['comments_count'] = $data['user']->comments->count();
		$data['posts_count'] = $data['user']->posts->count();
		$data['posts_active_count'] = $data['user']->posts->where('active', 1)->count();
		$data['posts_draft_count'] = $data['posts_count'] -
				 $data['posts_active_count'];
		$data['latest_posts'] = $data['user']->posts->where('active', 1)->take(
				5);
		$data['latest_comments'] = $data['user']->comments->take(5);
		return view('admin.profile', $data);
	}
}

