<?php

namespace weloveso\Http\Controllers;

use weloveso\Models\User;
use Illuminate\Http\Request;
/**
 * 
 */
class FriendController extends Controller
{
	
	public function getIndex(){
		$friends = Auth::user()->friends();

		return view('friends.index');
			->with('friends', $friends);
	}
}