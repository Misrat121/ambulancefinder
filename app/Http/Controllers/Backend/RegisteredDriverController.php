<?php

namespace App\Http\Controllers\Backend;
use App\Models\RegisteredDriver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisteredDriverController extends Controller
{
    public function list()
    {
      $registereddrivers=RegisteredDriver::paginate(2);


        return view('backend.layouts.registereddrivers.list',compact('registereddrivers'));
    }
    // public function store(Request $request)
    
    // {
    
    // // // dd($request->all());
    // //   RegisteredDriver::create([
        
    // // 'name'=>$request->registeredriver_name,
    // // 'license_number'=>$request->license_number,
    // // 'contact_number'=>$request->contact_number,
    // // 'email'=>$request->driver_email,
    // // 'address'=>$request->address,
    
           

    // //   ]);
   
      //  return redirect()->back();
    
   
}
