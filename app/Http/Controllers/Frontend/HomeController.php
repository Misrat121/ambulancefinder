<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Ambulance;

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

        return viwe('frontend.layouts.ambulanceList',compact('ambulance'));
    }
}
