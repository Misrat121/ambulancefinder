<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;

class HomeController extends Controller
{
    public function home()
    {
        $locations=Location::orderBy('id','desc')->toBase()->get();
        return view('frontend.layouts.home',compact('locations'));
    }
}
