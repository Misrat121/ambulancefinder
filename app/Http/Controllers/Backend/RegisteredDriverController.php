<?php

namespace App\Http\Controllers\Backend;
use App\Models\RegisteredDriver;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisteredDriverController extends Controller
{
    public function list()
    {
        $registereddrivers=RegisteredDriver::all();
        return view('backend.layouts.registereddrivers.list',compact('registereddrivers'));
    }
    public function store(Request $request)
    
    {
    
    // dd($request->all());
      RegisteredDriver::create([
         'name'=>$request->registereddriver_name,
         'contact_number'=>$request->contact_number,
         'license_number'=>$request->license_number,
         'address'=>$request->address,
           

      ]);
   
       return redirect()->back();
    
   }
}
