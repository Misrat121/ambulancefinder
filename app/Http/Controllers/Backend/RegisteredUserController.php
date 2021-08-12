<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function registereduser()
    {
        return view('backend.layouts.registereduser');
    }
}
