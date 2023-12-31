<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Session;
use URL;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function validateData($request){
        $request->validate([
            'name'=> 'required|max:255',
        ],[
            'name.required'=> 'Tên không được để trống',
            'name.max'=> 'Tên quá dài',
        ]);
    }
    
    public function isSearch(){
        $url = URL::current();
        $oldUrl = URL::previous();
        if($url != $oldUrl){
            Session::forget('search');
        }
    }
}
