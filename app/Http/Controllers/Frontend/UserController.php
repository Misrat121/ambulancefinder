<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signupForm()
    {
        return view('frontend.layouts.signup');
    }

    public function signupFormPost(Request $request)
    {

        // dd($request->all());
        User::create([
            'name'=>$request->user_name,
            'mobile'=>$request->user_mobile,
            'role'=>'patient',
            'email'=>$request->user_email,
            'password'=>bcrypt($request->user_email),
         ]);

         return redirect()->back()->with('success','User Registration Successful.');
    }

 public function loginForm()
    {
        return view('frontend.layouts.login');
    }

}
