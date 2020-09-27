<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

	public function index(){

		return view('login.index');
	}

	public function verify(Request $req){


			$validation = $req->validate([
		        'username'    => 'required',
		        'password' => 'required|min:3',
	   		 ]);

		$result = DB::table('user')->where('username', $req->username)
				->where('password', $req->password)
				->get(); 

		if(count($result) > 0){

			$req->session()->put('user', $req->username);
			return redirect()->route('home.index');
		}else{
			$req->session()->flash('msg', 'invalid username or password');
			return redirect()->route('login.index');
		}
	}
}
