<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    // this controller has literally 1 singular use.
    public function index() {
        return view('web.index');
    }
}
