<?php

namespace App\Http\Controllers\Backend;
use App\Models\Ambulance;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AmbulanceController extends Controller
{
    public function list()
    {
        $ambulances=Ambulance::all();
        //dd($ambulances->all());
        return view('backend.layouts.ambulances.list',compact('ambulances'));
    }

    public function store(Request $request)
    {

        // dd($request->all());
       Ambulance::create([
           'owner_name'=>$request->owner_name,
           'contact_number'=>$request->contact_number,
            'owner_address'=>$request->owner_address,
            'vehicle_number'=>$request->vehicle_number,
            'type'=>$request->type,
            'oxygen'=>$request->oxygen,
            'icu'=>$request->icu,
            'location'=>$request->location,
            'driver_name'=>$request->driver_name,
            'driving_license'=>$request->driving_license,
            'phone_number'=>$request->phone_number,
            'nid_number'=>$request->nid_number,
            'address'=>$request->address,

     ]);
   
       return redirect()->back();
    
   }
}
