<?php

namespace App\Http\Controllers\Backend;
use App\Models\Ambulance;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AmbulanceController extends Controller
{
    public function list()
    {
        $ambulances=Ambulance::paginate(3);
        return view('backend.layouts.ambulances.list',compact('ambulances'));
    }

    public function store(Request $request)
    {
       Ambulance::create([
           'type'=>$request->ambulance_type,
           
           'number'=>$request->ambulance_number
       ]);
   
       return redirect()->back();
    
   }
}
