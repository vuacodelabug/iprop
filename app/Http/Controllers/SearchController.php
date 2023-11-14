<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;


use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function postSearch(Request $req)
    {
        //khai báo mảng data
        $data = array();

        //chuẩn bị giá trị dể truyền vào sisson
        // Profile
        if ($req->key != 'key') {
            $data['key'] = $req->key;
        }

        //đẩy vào putSearch
        $this->putSearch($data);
    }
    public function postClearSearch()
    {
        //khai báo mảng data
        $data = array();
        //đẩy vào putSearch
        $this->putSearch($data);
    }
    public function putSearch($data)
    {
        //kiểm tra data nếu có đẩy vào session thông qua put, không có thì forget nó
        if (!empty($data)) {
            Session::put('search', $data);
        } else {
            Session::forget('search');
        }
    }
}
