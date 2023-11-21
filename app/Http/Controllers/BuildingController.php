<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\BuildingFloor;
use App\Models\Typeapartment;
use App\Models\Utility;
use App\Models\Service;
use App\Models\Unit;
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
        $data['provinces']= Province::select('provinceid', 'name')->get();
        $data['list_utilities']= Utility::select('name', 'id', 'description')
        ->where('status','1')
        ->get();

        return view('pages.building.create', $data);
    }
    public function getUtilitiesDiscription($id)
    {   
        $utilities= Utility::select('description')
        ->where('id',$id)
        ->first();

        echo ' <span>'.$utilities->description.'</span>';
    }


    public function postCreate(createBuildingRequest $req)
    {
        dd($req);
        /*
        $building = new Building;
        $building->name = $req->building_name;
        $building->address = $req->building_address;
        $building->province_id = $req->province_id;
        $building->district_id = $req->district_id;
        $building->ward_id = $req->ward_id;

        if (isset($req->base64image) and $req->base64image != null) {
            
            $folderPath = public_path('assets/images/buiding-logo/');
            $image_parts = explode(";base64,", $req->base64image);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $filename = 'logo-' . $building->id . '.' . $image_type;
            $file = $folderPath . $filename;
            file_put_contents($file, $image_base64);
            $part = 'assets/images/buiding-logo/' . $filename;
            $building->logo = $part;
            $building->save();
        }else{
            $building->logo ='assets/images/buiding-logo/logo-0.png';
            $building->save();
        }

        for($i = 0; $i < $req->numbfloor1; $i++){
            $buildingfloor = new BuildingFloor;
            $buildingfloor->id_building = $building->id; 
            $buildingfloor->code_floor =  'B'.$i;
        }
*/
        // // $block_building = new ZblockBuilding;
        // // $block_building->name = 'create building';
        // // $block_building->content = 'Thêm mới khách hàng';
        // // $block_building->target_id = $building->id;
        // // $block_building->user_id = auth()->user()->id;
        // // $block_building->save();

        return redirect('/admin/building/create');
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
