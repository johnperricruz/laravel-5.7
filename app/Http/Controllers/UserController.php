<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller{

	public function __construct(){
		if(Session::has('role')){
			if(Session::get('role') != 'user'){	
				return Redirect::to('/');
			}
		}
	}

   	public function dashboard(){
   		dd('USER DASHBOARD');
   	}
}
