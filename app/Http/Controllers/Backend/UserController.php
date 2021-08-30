<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list()
    {


        // $users=Registereduser::all();
        return view('backend.layouts.user.list');
    }
}
