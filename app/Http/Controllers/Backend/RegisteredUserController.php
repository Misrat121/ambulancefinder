<?php

namespace App\Http\Controllers\Backend;
use App\Models\Registereduser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function list()
    {
        return view('backend.layouts.registeredusers.list');
    }
    public function store(Request $request)
    {
       Registereduser::create([
        'name'=>$request->name,
        'phone_number'=>$request->phone_number,
        'address'=>$request->address,
       ]);
   
       return redirect()->back();
    }
}
