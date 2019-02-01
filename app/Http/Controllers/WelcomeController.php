<?php

namespace weloveso\Http\Controllers;

/**
 * 
 */
class WelcomeController extends Controller
{
	
	public function index(){
		return view('welcome');
	}
}