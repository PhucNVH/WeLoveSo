<?php

namespace weloveso\Http\Controllers;


use Auth;
use weloveso\Models\Status;
/**
 * 
 */
class HomeController extends Controller
{
	
	public function homePage(){

		if(Auth::check()){
			$statuses = Status::where(function($query){
				return $query->where('user_id', Auth::user()->id)
							 ->orWhereIn('user_id', Auth::user()->friends()->pluck('id')
							);
			})
			->orderBy('created_at', 'desc')
			->paginate(10); 

			return view('timeline.index')
					->with('statuses', $statuses);
		}

		return view('home');
	}
}