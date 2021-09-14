<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signupForm()
    {
        return view('frontend.layouts.signup');
    }
    
    public function signupFormPost(Request $request)
    {

        
                //    dd($request->all());
                    $request->validate([
                        'user_name'=>'required',
                        'user_email'=>'required|email|unique:users,email',
                        'user_password'=>'required|min:6',
                        'user_mobile'=>'required'
                    ]);
            
        User::create([
            'name'=>$request->user_name,
            'mobile'=>$request->user_mobile,
            'role'=>'patient',
            'email'=>$request->user_email,
            'password'=>bcrypt($request->user_password),
         ]);

         return redirect()->back()->with('success','User Registration Successful.');
     }
     public function driversignupForm()
    {
        return view('frontend.layouts.driversignup');
    }

    public function login()
    {
        return view('frontend.layouts.login');
    }
    
    public function doLogin(Request $request)
    {
        // dd($request->all());
        $credentials=$request->except('_token');
        //   dd(Auth::attempt($credentials));
        if(Auth::attempt($credentials))
        {
            return redirect()->route('home');
            //user logged in
        }
        return redirect()->back()->with('message','invalid user info.');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.login');
    }


}


