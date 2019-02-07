<?php

namespace weloveso\Http\Controllers;

use Auth;
use weloveso\Models\User;
use Illuminate\Http\Request;
/**
 * 
 */
class StatusController extends Controller
{
	
	public function postStatus(Request $request){
		$this->validate($request,[ 
			'status' => 'required|max:5000',
		]);

		Auth::user()->statuses()->create([
			'body' => $request->input('status'),
		]);

		return redirect()
				->route('home');
				
	}
}