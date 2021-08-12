<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AmbulanceController extends Controller
{
    public function list()
    {
        return view('backend.layouts.ambulances.list');
    }

    public function create()
    {
        return view('backend.layouts.ambulances.create');
    }
}
