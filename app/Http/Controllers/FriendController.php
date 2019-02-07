<?php

namespace weloveso\Http\Controllers;

use Auth;
use weloveso\Models\User;
use Illuminate\Http\Request;
/**
 * 
 */
class FriendController extends Controller
{
	
	public function getIndex($username){
		$friends = Auth::user()->friends();
		$requests = Auth::user()->friendRequests();
		$user = User::where('username', $username)->first();

		if (!$user) {
			return redirect()->route('home')->with('info', 'Tài khoản này chưa tồn tại');
		}

		return view('friends.index')
			->with('friends', $friends)
			->with('requests', $requests)
			->with('user', $user);
	}

	public function getAdd($username){
		$user = User::where('username', $username)->first();

		if (!$user) {
			return redirect()->route('home')->with('info', 'Tài khoản này chưa tồn tại');
		}

		if (Auth::user()->hasFriendRequestPending($user) || $user->hasFriendRequestPending(Auth::user())){
			return redirect()->route('profile.index', ['username' => $user->username])->with('info', 'Đang chờ bạn đồng ý.');
		}

		if (Auth::user()->isFriendsWith($user)){
			return redirect()->route('profile.index', ['username' => $user->username])->with('info', 'Đã kết bạn.');
		}

		Auth::user()->addFriend($user);

		return redirect()->route('profile.index', ['username' => $username])->with('info', 'Đã gửi lời mời kết bạn.');
	}

	public function getAccept($username){
		$user = User::where('username', $username)->first();

		if (!$user) {
			return redirect()->route('home')->with('info', 'Tài khoản này chưa tồn tại');
		}

		if (!Auth::user()->hasFriendRequestReceived($user)) {
			return redirect()->route('home');
		}

		Auth::user()->acceptFriendRequest($user);

		return redirect()->route('profile.index', ['username' => $username])->with('info', 'Lời mời kết bạn đã được chấp nhận.');
	}
}