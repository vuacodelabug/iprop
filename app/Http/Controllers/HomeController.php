<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\District;
use App\Models\Ward;

class HomeController extends Controller
{
    public function getHome()
    {
        $data = array();
        $data['provinces']=Province::get();
        return view('home', $data);
    }

}
