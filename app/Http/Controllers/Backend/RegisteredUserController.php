<?php

namespace App\Http\Controllers\Backend;
use App\Models\Registereduser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function list()
    {


        $registeredusers=Registereduser::all();
        return view('backend.layouts.registeredusers.list',compact('registeredusers'));
    }
    public function store(Request $request)
    {
       Registereduser::create([
        'name'=>$request->registereduser_name,
        'phone_number'=>$request->phone_number,
        'address'=>$request->registereduser_address,
       ]);
   
       return redirect()->back();
    }
}
