<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Ward;

class AddressController extends Controller
{
    public function getDistrict($id)
    {
        $districts=District::select('districtid', 'name')
        ->where('provinceid',$id)
        ->get();

        echo '<option value="">---</option>';
        foreach($districts as $district){
            echo '<option value="'.$district->districtid.'">'.$district->name.'</option>';
        }
    }
    public function getWard($id)
    {
        $wards=Ward::select('wardid', 'name')
        ->where('districtid',$id)
        ->get();

        echo '<option value="">---</option>';
        foreach($wards as $ward){
            echo '<option value="'.$ward->wardid.'">'.$ward->name.'</option>';
        }
    }
}
