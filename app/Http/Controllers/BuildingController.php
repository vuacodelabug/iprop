<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\createBuildingRequest;
// use App\Models\ZblockBuilding;
use App\Models\Building;

class BuildingController extends Controller
{
    public function getList()
    {
        $this->isSearch();
        
        $data['buildings'] = Building::where(function ($query) {
            if (isset(Session::get('search')['key'])) {
                $key = Session::get('search')['key'];
                $query->where('name', 'like', '%' . $key . '%')
                    ->orWhere('id', 'like', '%' . $key . '%')
                    ->orWhere('phone', 'like', '%' . $key . '%');
            }
        })->orderBy('id', 'desc')->paginate(5);
        return view('pages.building.list', $data);
    }
    public function getCreate()
    {
        return view('pages.building.create');
    }
    public function postCreate(createBuildingRequest $req)
    {
        $building = new Building;
        $building->name = $req->name;
        $building->address = $req->address;
        $building->description = $req->description;


        // $block_building = new ZblockBuilding;
        // $block_building->name = 'create building';
        // $block_building->content = 'Thêm mới khách hàng';
        // $block_building->target_id = $building->id;
        // $block_building->user_id = auth()->user()->id;
        // $block_building->save();

        return redirect('/admin/building/list');
    }

    //Hien thi chi tiet nhan vien
    public function getShow($id)
    {
        $data['building'] = Building::find($id);
        return view('pages.building.view', $data);
    }


    //chinh sua phan tu
    public function getEdit($id)
    {
        $data['building'] = Building::find($id);
        return view('pages.building.edit', $data);
    }
    public function postEdit(Request $req)
    {
        $building = Building::find($req->id);  
        $building->name = $req->name;
        $building->address = $req->address;
        $building->description = $req->description;
        $building->save();

        // $block_building = new ZblockBuilding;
        // $block_building->name = 'edit building';
        // $block_building->content = 'Cập nhật thông tin khách hàng';
        // $block_building->target_id = $building->id;
        // $block_building->user_id = auth()->user()->id;
        // $block_building->save();

        return redirect('/admin/building/list');
    }
    //xoa phan tu
    public function postChangeStatus($id)
    {
        $building = Building::find($id);
        if ($building->status == '1') {
            $building->status = '0';
        } else{
            $building->status = '1';
        }
        $building->save();

        // $block_building = new ZblockBuilding;
        // $block_building->name = 'edit building';
        // $block_building->content = 'Đổi trạng thái khách hàng';
        // $block_building->target_id = $building->id;
        // $block_building->user_id = auth()->user()->id;
        // $block_building->save();

        return $building->status;
        // return redirect('/admin/building/list');
    }
}
