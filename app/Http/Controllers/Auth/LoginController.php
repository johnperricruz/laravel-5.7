<?php

namespace App\Http\Controllers\Auth;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;





class LoginController extends Controller{

    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
          $user = Auth::user();

          $session = array(
            'pid'  => $user->id,
            'role' => $login->role
          );

          //Initiate Session
          Session::put($session);

         	if($user->role == 'admin'){
         		return redirect('/admin');
         	}else if($user->role == 'user'){
         		return redirect('/user');
         	}
         	Session::flash('danger', "Can't login. Please contact system administrator.");
         	return redirect('/');
        }
        
       Session::flash('danger', 'Invalid username / password.');
       return redirect('/');
    }

}
