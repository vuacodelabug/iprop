<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
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
}
