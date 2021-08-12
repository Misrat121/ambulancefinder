<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisteredDriverController extends Controller
{
    public function registereddriver()
    {
        return view('backend.layouts.registereddriver');
    }
}
