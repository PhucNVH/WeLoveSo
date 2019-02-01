<?php

namespace weloveso\Http\Controllers;

/**
 * 
 */
class HomeController extends Controller
{
	
	public function homePage(){
		return view('home');
	}
}