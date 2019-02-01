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
		return view('auth.signup');
	}

	public function postSignup(Request $request){
		$this->validate($request, [
			'last_name'		=>	'required|max:255',
			'first_name'		=>	'required|max:255',
			'username'	=>	'required|unique:users|alpha_dash|max:20',	
			'password'		=>	'required|min:2',
			// 'password_again'		=>	'required|unique:users|min:2',
			'email'		=>	'required|unique:users|email|max:255',
		]);

		User::create([
			'last_name' 	=>	$request->input('last_name'),
			'first_name' 	=>	$request->input('first_name'),
			'username' 	=>	$request->input('username'),	
			'password' 	=>	bcrypt($request->input('password')),
			'email' 	=>	$request->input('email'),
		]);

		return redirect()
			->route('auth.signup')
			->with('info', 'Tai khoản của bạn đã được khởi tạo, bây giờ bạn có thể đăng nhập ngay');
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
			return redirect()->back()->with('info', 'Dang nhap chua thanh cong.');	
		}

		return redirect()->route('home')->with('info', 'Ban da dang nhap thanh cong.');
	}

	public function getSignout(){
		Auth::logout();

		return redirect()->route('home');
	}
}
