<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class Authcontroller extends Controller
{
    public function index(){
    	return view('login/index');
    }
    public function postlogin(Request $request){
		$this->validate($request,[
			'name' => 'required|string|max:50',
			'password' => 'required|string|max:50'
		]);
    	if(Auth::attempt($request->only('name', 'password'))){
    		return redirect('/disc/admin');
    	}
    	return redirect('/login');
    }

    public function logout(){
    	Auth::logout();
    	return redirect('/login');
    }
}
