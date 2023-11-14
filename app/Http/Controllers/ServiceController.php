<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Session;
use App\Models\ZblockHistory;

class ServiceController extends Controller
{
    public function getList()
    {
        $data['services'] = Service::where(function ($query) {
            if (isset(Session::get('search')['key'])) {
                $key = Session::get('search')['key'];
                $query->where('name', 'like', '%' . $key . '%')
                    ->orWhere('description', 'like', '%' . $key . '%');
            }
        })->orderBy('id', 'desc')->paginate(20);
        
        return view('pages.service.list', $data);
    }
    
    public function postCreate(Request $req)
    {
        $this->validateData($req);
        $service = new Service;
        $service->name = $req->name;
        $service->description = $req->description;
        $service->save();


        $block_user = new ZblockHistory;
        $block_user->name = 'create service';
        $block_user->content = 'Thêm mới dịch vụ';
        $block_user->user_id = auth()->user()->id;
        $block_user->target_id = $service->id;
        $block_user->save();

        return redirect('/admin/service/list');
    }

    //chinh sua phan tu
    public function getEdit($id)
    {
        $data['service'] = Service::find($id);
        return view('service.edit', $data);
    }
    public function postEdit(Request $req)
    {
        $this->validateData($req);

        $service = Service::find($req->id);
        $service->name = $req->name;
        $service->description = $req->description;
        $service->status = $req->status;
        $service->save();
     
        $block_service = new ZblockHistory;
        $block_service->name = 'edit service';
        $block_service->content = 'Cập nhật thông tin dịch vụ';
        $block_service->target_id = $service->id;
        $block_service->user_id = auth()->user()->id;
        $block_service->save();

        
        return $service;
    }
    //xoa phan tu
    public function getDelete($id)
    {
        $service = Service::find($id);
        $service->status = '0';
        $service->updated_at = date('Y-m-d H:m:s');
        $service->save();
        
        $block_service = new ZblockHistory;
        $block_service->name = 'delete service';
        $block_service->content = 'Xoá dịch vụ';
        $block_service->target_id = $service->id;
        $block_service->user_id = auth()->user()->id;
       $block_service->save();

        return redirect('/admin/service/list');
    }


    public function postFind(Request $req){
        $service = Service::find($req->id);
        return ($service)? $service : 0;
    }
}
