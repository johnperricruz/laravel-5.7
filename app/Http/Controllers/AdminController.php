<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller{

	public function __construct(){
		if(Session::has('role')){
			if(Session::get('role') != 'admin'){	
				return Redirect::to('/');
			}
		}
	}

   	public function dashboard(){
   		dd('ADMIN DASHBOARD');
   	}
}
