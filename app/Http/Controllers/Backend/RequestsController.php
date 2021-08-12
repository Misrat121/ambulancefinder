<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestsController extends Controller
{
    public function manage()
    {
        return view('backend.layouts.requests.manage');
    }
}
