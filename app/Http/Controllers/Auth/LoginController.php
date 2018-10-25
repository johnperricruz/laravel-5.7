<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller{

    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            dd(true);
        }
       Session::flash('danger', 'Invalid username / password.');
       return redirect('/');
    }

}
