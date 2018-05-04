<?php
namespace App\Http\Controllers;
use App\Category;
use App\Post;
use Log;
use Illuminate\Http\Request;
use View;

class CategoryController extends Controller {

	public function index() {
		$objCategory = new Category();
		$allCategories = $objCategory->all()->toArray();
		return view('category.list')->with('allCategories', $allCategories);
	}
	
	public function create() {
	    $objCategory = new Category();
	    $allCategories = $objCategory->all()->toArray();
	    return view('category.create')->with('allCategories', $allCategories);
	}

	// action de luu category moi khi form submit
	public function store(Request $request) {
		$allRequest = $request->all();
		$categoryName = $allRequest['name'];
		$categoryDes = $allRequest['description'];
		$categoryIdParent = $allRequest['idCategoryParrent'];
		
		if ($categoryIdParent === NULL) {
		    $categoryIdParent = 0;
		}
		
		$dataInsertToDatabase = array(
				'name' => $categoryName,
				'description' => $categoryDes,
		        'idCategoryParrent'=> $categoryIdParent
		);
		
		$objCategory = new Category();
		$objCategory->insert($dataInsertToDatabase);
		
		return redirect()->action('CategoryController@index');
	}

	public function edit($id) {
		$objCategory = new Category();
		$getCategoryById = $objCategory->find($id)->toArray();
		return view('category.edit')->with('getCategoryById', $getCategoryById);
	}

	public function update(Request $request) {
		$allRequest = $request->all();
		$categoryName = $allRequest['name'];
		$categoryDes = $allRequest['description'];
		$id = $allRequest['id'];
		
		$objCategory = new Category();
		$getCategoryById = $objCategory->find($id);
		$getCategoryById -> name = $categoryName;
		$getCategoryById -> description = $categoryDes;
		$getCategoryById->save();
		
		return redirect()->action('CategoryController@index');
	}

	public function destroy($id) {
		Category::find($id)->delete();
		return redirect()->action('CategoryController@index');
	}

	public function getPostsByCategoryID($idCategory) {
		$posts = Post::where('idCategory', $idCategory)->orderBy('created_at',
				'desc')->paginate(5);
		return view('post.list')->with('posts', $posts);
	}

	public function getPostsByCategoryName($name) {
		$category = Category::where('name', '=', $name)->first();
		if ($category != null) {
			$posts = Post::where('idCategory', $category -> id)->orderBy(
					'created_at', 'desc')->paginate(5);
			Log::info("category name is {$name}, and id is {$category -> id}");
			Log::info($posts);
			return view('post.list')->with('posts', $posts);
		} else {
			return redirect('/');
		}
	}
}