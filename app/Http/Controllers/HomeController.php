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
    public function getDistrict($id)
    {
        $districts=District::select('districtid', 'name')
        ->where('provinceid',$id)
        ->get();

        echo '<option value="">Chọn huyện</option>';
        foreach($districts as $district){
            echo '<option value="'.$district->districtid.'">'.$district->name.'</option>';
        }
    }
    public function getWard($id)
    {
        $wards=Ward::select('wardid', 'name')
        ->where('districtid',$id)
        ->get();

        echo '<option value="">Chọn xã</option>';
        foreach($wards as $ward){
            echo '<option value="'.$ward->wardid.'">'.$ward->name.'</option>';
        }
    }

}
