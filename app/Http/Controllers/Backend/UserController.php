<?php

namespace App\Http\Controllers\Backend;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('backend.layouts.login');
    }
    public function list()
    {


        $user=User::all();
        return view('backend.layouts.user.list',compact('user'));
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

    public function patientlist()
    {
        $user=User::where('role','=','patient')->get();
        return view('backend.layouts.patient',compact('user'));
    }
}
