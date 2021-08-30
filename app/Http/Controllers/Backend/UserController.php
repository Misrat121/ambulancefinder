<?php

namespace App\Http\Controllers\Backend;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list()
    {


        // $users=Registereduser::all();
        return view('backend.layouts.user.list');
    }
    // public function store(Request $request)
    // {
    //    User::create([
    //     'name'=>$request->user_name,
    //     'phone_number'=>$request->phone_number,
    //     'email'=>$request->user_email,
    //    ]);
   
    //    return redirect()->back();
    // }
}
