<?php

namespace App\Http\Controllers;

use App\Models\BuildingUtility;
use App\Models\Province;
use App\Models\District;
use App\Models\Ward;

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
        $data['provinces'] = Province::select('provinceid', 'name')->get();

        return view('pages.building.create', $data);
    }
    public function getUtilitiesDiscription($id)
    {
        $utilities = Utility::select('description')
            ->where('id', $id)
            ->first();

        echo ' <span>' . $utilities->description . '</span>';
    }

    public function postDetail($building, $req)
    {
        $building->name = $req->building_name;
        $building->address = $req->building_address;
        $building->province_id = $req->province_id;
        $building->district_id = $req->district_id;
        $building->ward_id = $req->ward_id;

        if (isset($req->base64image) and $req->base64image != null) {
            $link = ltrim($building->logo, "/");
            if (file_exists($link)) {
                unlink($link);
            }
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
        }
        $building_id = $building->id;

        $buildingfloor = BuildingFloor::where('id_building', $building_id)->get();
        
        if ($buildingfloor) {
            foreach ($buildingfloor as $floor) {
                BuildingUtility::where('id_building', $building_id)
                    ->where('id_floor', $floor->id)
                    ->delete();
            }
            
            // Xóa tất cả các bản ghi trong Collection
            $buildingfloor->delete();
    }
        if (isset($req->floor1_code) and count($req->floor1_code) > 0) {
            foreach ($req->floor1_code as $key => $floor1_code) {
                $buildingfloor = new BuildingFloor;
                $buildingfloor->id_building = $building_id;
                $buildingfloor->code_floor = $floor1_code;
                $buildingfloor->name_floor = $req->floor1_name[$key];
                $buildingfloor->type = '1';
                $buildingfloor->save();
            }
        }

        if (isset($req->floor2_code) and count($req->floor2_code) > 0) {
            foreach ($req->floor2_code as $key => $floor2_code) {
                $buildingfloor = new BuildingFloor;
                $buildingfloor->id_building = $building_id;
                $buildingfloor->code_floor = $floor2_code;
                $buildingfloor->name_floor = $req->floor2_name[$key];
                $buildingfloor->type = '2';
                $buildingfloor->save();
            }
        }

        // Đặt dữ liệu vào flash session với key là 'active_tab' và giá trị là 'utilities'
        Session::flash('active_tab', 'utilities');
    }

    public function postCreate(createBuildingRequest $req)
    {
        $building = new Building;
        $building->logo = 'assets/images/buiding-logo/logo-0.png';
        $this->postDetail($building, $req);
        // return redirect('/admin/building/edit/'.$building_id);
        return redirect('/admin/building/edit/' . '11');
    }

    //chinh sua phan tu
    public function getEdit($id)
    {

        $data['building'] = Building::find($id);
        $data['provinces'] = Province::get();
        $data['districts'] = (!empty($data['building']->district_id)) ? District::where('provinceid', $data['building']->province_id)->get() : array();
        $data['wards'] = (!empty($data['building']->ward_id)) ? Ward::where('districtid', $data['building']->district_id)->get() : array();
        $data['list_utilities'] = Utility::select('name', 'id', 'description')
            ->where('status', '1')
            ->get();

        return view('pages.building.edit', $data);
    }
    public function postEdit(Request $req)
    {
        $building = Building::find($req->buiding_id);

        //detail
        if ($req->active_tab == 'detail') {
            $this->postDetail($building, $req);
        }

        //utilities
        if ($req->active_tab == 'utilities') {
            if (isset($req->buildingutilities_id) and count($req->buildingutilities_id) > 0) {
                foreach ($req->buildingutilities_id as $key => $id) {

                    if ($id == '0') {
                        $buildingutilities = new BuildingUtility;
                        $buildingutilities->id_building = $req->buiding_id;
                        $buildingutilities->id_utilities = $req->utilities_id[$key];
                        $buildingutilities->id_floor = $req->floor_id[$key];
                        $buildingutilities->save();
                    } else {
                        $buildingutilities = BuildingUtility::find($id);
                        $buildingutilities->id_building = $req->buiding_id;
                        $buildingutilities->id_utilities = $req->utilities_id[$key];
                        $buildingutilities->id_floor = $req->floor_id[$key];
                        $buildingutilities->save();
                    }
                }
            }
            if (isset($req->utilities_delete) and count($req->utilities_delete) > 0) {
                $buildingutilities = BuildingUtility::whereIn('id', $req->utilities_delete)->get();
                foreach ($buildingutilities as $key => $buildingutilities) {
                    $buildingutilities->delete();
                }

            }
            Session::flash('active_tab', 'service');
        }

        if ($req->active_tab == 'service') {
            Session::flash('active_tab', 'typepartment');
        }
        if ($req->active_tab == 'typepartment') {

        }
        // return redirect('/admin/building/edit/'.$building_id);
        return redirect('/admin/building/edit/' . '11');
    }
    //xoa phan tu
    public function postChangeStatus($id)
    {
        $building = Building::find($id);
        if ($building->status == '1') {
            $building->status = '0';
        } else {
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

    //Hien thi chi tiet nhan vien
    public function getShow($id)
    {
        $data['building'] = Building::find($id);
        return view('pages.building.view', $data);
    }
}
