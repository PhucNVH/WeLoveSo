<?php

namespace weloveso\Http\Controllers;

use Auth;
use weloveso\Models\User;
use Illuminate\Http\Request;
/**
 * 
 */
class ProfileController extends Controller
{
	
	public function getProfile($username){
		
		$user = User::where('username', $username)->first();

		if(!$user){
			abort(404);
		}

		return view('profile.index')->with('user', $user);
	}

	public function getEdit(){
		return view('profile.edit');
	}

	public function postEdit(Request $request){
		$this->validate($request,[
			'last_name'						=>	'max:255',
			'first_name'					=>	'max:255',
			// 'username'					=>	'unique:users|alpha_dash|max:20',	
			'password'						=>	'confirmed|min:2',
			'password_confirmation'			=>	'sometimes|required_with:password',
			'company'						=>	'max:255',
			'location'						=>	'max:255',
			// 'email'		=>	'unique:users|email|max:255',
		]);

		
		if($request->input('password') != Auth::user()->password){
			Auth::user()->update([
				'last_name' 	=>	$request->input('last_name'),
				'first_name' 	=>	$request->input('first_name'),
				'company' 	=>	$request->input('company'),
				'location' 	=>	$request->input('location'),
				'password' 	=>	bcrypt($request->input('password')),
				'password_confirmation' => bcrypt($request->input('password_confirmation')),	
				// 'email' 	=>	$request->input('email'),
			]);
		}
		else{
			Auth::user()->update([
				'last_name' 	=>	$request->input('last_name'),
				'first_name' 	=>	$request->input('first_name'),
				'company' 	=>	$request->input('company'),
				'location' 	=>	$request->input('location'),
			]);
		};

		return redirect()
			->route('profile.edit')
			->with('info', 'Bạn đã cập nhật thông tin thành công.');
	}

	// public function profile()
 //    {
 //        $user = Auth::user();
 //        return view('profile',compact('user',$user));
 //    }
}
	