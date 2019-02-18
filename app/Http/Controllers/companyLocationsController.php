<?php

namespace weloveso\Http\Controllers;

use weloveso\Models\companyLocations;
use weloveso\Models\User;
use Illuminate\Http\Request;
/**
 * 
 */
class companyLocationsController extends Controller
{
	
	public function storeLocations(Request $request, $username){
		
		$user = User::where('username', $username)->first();

		if(!$user){
			abort(404);
		}

		// abort_unless(\Gate::allows('company_create'), 403);
		$company = companyLocations::create($request->all());
		// companyLocations::create([
		// 	'name' 	=>	$request->input('name'),
		// 	'address_address' => $request->input('address_address'),
		// 	'address-latitude' => $request->input('address-latitude'),
		// 	'address-longitude' => $request->input('address-longitude'),
		// ]);
		
		return view('companies.createLocations')->with('user', $user);
	}
}