<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Ambulance;
use App\Models\Request as SendRequest;

class HomeController extends Controller
{
    public function home()
    {

        $locations=Location::orderBy('id','desc')->toBase()->get();

       
        return view('frontend.layouts.home',compact('locations'));
    }


    public function search(Request $request)
    {
        $from_location = $request->from_location;
        $to_location = $request->to_location;
    
        $ambulance = Ambulance::whereBetween('location_id',[$from_location,$to_location])->get();

        return view('frontend.layouts.ambulanceList',compact('ambulance'));
    }

    public function sendrequest(Request $request)
    {
        SendRequest::create([
            'user_id' => auth()->user()->id,
            'ambulance_id' => $request->ambulance_id,
            'status' => 'pending'
        ]);
        
        return redirect()->back();

        
    }
}
