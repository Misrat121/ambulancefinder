<?php

namespace App\Http\Controllers\Backend;
use App\Models\RegisteredDriver;
use App\Models\Registereduser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisteredDriverController extends Controller
{
    public function list()
    {
      $registereddrivers=RegisteredDriver::with('registereduser')->paginate(2);


        
        $registeredusers=Registereduser::all();
        return view('backend.layouts.registereddrivers.list',compact('registereddrivers','registeredusers'));
    }
    public function store(Request $request)
    
    {
    
    // dd($request->all());
      RegisteredDriver::create([
        'registereduser_id'=>$request->registereduser_id,
         'name'=>$request->registereddriver_name,
         'contact_number'=>$request->contact_number,
         'license_number'=>$request->license_number,
         'address'=>$request->address,
           

      ]);
   
       return redirect()->back();
    
   }
}
