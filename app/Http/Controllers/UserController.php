<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\User;



class UserController extends Controller

{



    public function create()

    {

        return view('register');

    }



    public function store()

    {

        request()->validate([

            'name' => 'required|min:2|max:50',

            'phone' => 'required|numeric',            

            'email' => 'required|email|unique:users',

            'password' => 'required|min:6',                

            'confirm_password' => 'required|min:6|max:20|same:password',

        ], [

            'name.required' => 'Name is required',

            'name.min' => 'Name must be at least 2 characters.',

            'name.max' => 'Name should not be greater than 50 characters.',

        ]);



        $input = request()->except('password','confirm_password');

        $user=new User($input);

        $user->password=bcrypt(request()->password);

        $user->save();



        return back()->with('success', 'User created successfully.');

        

    }

}