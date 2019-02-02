<?php

namespace weloveso\Http\Controllers;

use DB;
use weloveso\Models\User;
use Illuminate\Http\Request;
/**
 * 
 */
class SearchController extends Controller
{
	
	public function getResults(Request $request){
		$query = $request->input('query');

		if(!$query) {
			return redirect()->route('home');
		}

		$users = User::where(DB::raw("CONCAT(last_name, ' ', first_name)"), 'LIKE', "%{$query}%")->orWhere('username', 'LIKE', "%{$query}%")->get();

		return view('search.results')->with('users', $users);
	}
}