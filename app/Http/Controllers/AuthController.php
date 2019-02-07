<?php

namespace weloveso\Http\Controllers;

use Auth;
use weloveso\Models\User;
use Illuminate\Http\Request;

/**
 * 
 */
class AuthController extends Controller
{
	public function getSignup(){
		return view('auth.signin');
	}

	public function postSignup(Request $request){
		$this->validate($request, [
			'last_name'		=>	'required|max:255',
			'first_name'		=>	'required|max:255',
			'username'	=>	'required|unique:users|alpha_dash|max:20',	
			'password'		=>	'required|min:2',
			// 'password_confirmation'=>'sometimes|required_with:password',
			'email'		=>	'required|unique:users|email|max:255',
		]);

		User::create([
			'last_name' 	=>	$request->input('last_name'),
			'first_name' 	=>	$request->input('first_name'),
			'username' 	=>	$request->input('username'),	
			'password' 	=>	bcrypt($request->input('password')),
			'password_confirmation' => bcrypt($request->input('password')),
			'email' 	=>	$request->input('email'),
		]);

		return redirect()
			->route('auth.results')
			->with('info', 'Tài khoản của bạn đã được khởi tạo, bây giờ bạn có thể đăng nhập ngay');
	}

	public function getSignin(){
		return view('auth.signin');
	}

	public function postSignin(Request $request){
		$this->validate($request, [
		'username'		=>	'required',	
		'password'		=>	'required',
		]);

		if(!Auth::attempt($request->only(['username', 'password']), $request->has('remember')))
		{
			return redirect()->route('auth.results')->with('info', 'Đăng nhập chưa thành công.');	
		}

		return redirect()->route('home');
	}

	public function getSignout(){
		Auth::logout();

		return redirect()->route('auth.signin');
	}

	public function getAuthResults(){
		return view('auth.results');
	}
}
