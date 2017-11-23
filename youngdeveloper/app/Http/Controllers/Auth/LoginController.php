<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller {
	/*
	 * |--------------------------------------------------------------------------
	 * | Login Controller
	 * |--------------------------------------------------------------------------
	 * |
	 * | This controller handles authenticating users for the application and
	 * | redirecting them to your home screen. The controller uses a trait
	 * | to conveniently provide its functionality to your applications.
	 * |
	 */
	
	use AuthenticatesUsers;

	protected $redirectTo = '/home';

	public function __construct() {
		$this->middleware('guest', [
				'except' => 'logout'
		]);
	}

	public function login(Request $request) {
		$this->validate($request,
				[
						'loginname' => 'required',
						'password' => 'required'
				]);
		
		$login_type = filter_var($request->input('loginname'),
				FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
		
		$request->merge(
				[
						$login_type => $request->input('loginname')
				]);
		
		if (Auth::attempt($request->only($login_type, 'password'))) {
			return redirect()->intended($this->redirectPath());
		}
		
		return redirect()->back()
			->withInput()
			->withErrors(
				[
						'loginname' => 'These credentials do not match our records.'
				]);
	}
}
