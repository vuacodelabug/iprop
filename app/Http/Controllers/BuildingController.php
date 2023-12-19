<?php

namespace App\Http\Controllers;

use App\Models\BuildingTypeapartment;
use App\Models\BuildingUtility;
use App\Models\BuildingService;
use App\Models\Province;
use App\Models\District;
use App\Models\Ward;
use App\Models\Apartment;
use App\Models\BuildingFloor;
use App\Models\Typeapartment;
use App\Models\Utility;
use App\Models\Service;
use App\Models\Unit;
use App\Models\ZblockBuildingtype;
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

    public function postCreate(createBuildingRequest $req)
    {
        $building = new Building;
        $building->logo = 'assets/images/buiding-logo/logo-0.png';
        $this->postDetail($building, $req);
        // return redirect('/admin/building/edit/'.$building_id);
        return redirect('/admin/building/edit/' . '11');
    }

    public function getDiscription($id)
    {
        switch (request('active_tab')) {
            case 'utilities': {
                    $utilities = Utility::select('description')
                        ->where('id', $id)
                        ->first();
                    echo ' <span>' . $utilities->description . '</span>';
                }
            case 'service': {
                    $service = Service::select('description')
                        ->where('id', $id)
                        ->first();
                    echo ' <span>' . $service->description . '</span>';
                    break;
                }
            case 'typeapartment': {
                    $typeapartment = Typeapartment::select('description')
                        ->where('id', $id)
                        ->first();
                    echo ' <span>' . $typeapartment->description . '</span>';
                    break;
                }
        }

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

        // if ($buildingfloor) {
        //     foreach ($buildingfloor as $floor) {
        //         BuildingUtility::where('id_building', $building_id)
        //             ->where('id_floor', $floor->id)
        //             ->delete();
        //     }

        //     // Xóa tất cả các bản ghi trong Collection
        //     $buildingfloor->delete();
        // }
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
    public function postUtilities($building, $req)
    {
        if (isset($req->buildingutilities_id) and count($req->buildingutilities_id) > 0) {
            foreach ($req->buildingutilities_id as $key => $id) {

                if ($id == '0') {
                    $buildingutilities = new BuildingUtility;
                    $buildingutilities->id_building = $req->building_id;
                    $buildingutilities->id_utilities = $req->utilities_id[$key];
                    $buildingutilities->id_floor = $req->floor_id[$key];
                    $buildingutilities->save();
                } else {
                    $buildingutilities = BuildingUtility::find($id);
                    $buildingutilities->id_building = $req->building_id;
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
    public function postService($building, $req)
    {
        // dd($req);
        // echo    '<pre>';
        // var_dump($req->toArray());
        // echo        '</pre>';

        if (isset($req->buildingservice_id) and count($req->buildingservice_id) > 0) {
            foreach ($req->buildingservice_id as $key => $id) {

                if ($id == '0') {
                    $buildingservice = new BuildingService;
                    $buildingservice->id_building = $req->building_id;
                    $buildingservice->id_service = $req->service_id[$key];
                    $buildingservice->save();

                } else {
                    $buildingservice = BuildingService::find($id);
                    $buildingservice->id_building = $req->building_id;
                    $buildingservice->id_service = $req->service_id[$key];
                    $buildingservice->save();
                }
            }
        }
        if (isset($req->service_delete) and count($req->service_delete) > 0) {
            $buildingservice = BuildingService::whereIn('id', $req->service_delete)->get();
            foreach ($buildingservice as $key => $buildingservice) {
                $buildingservice->delete();
            }

        }
        Session::flash('active_tab', 'typeapartment');
    }
    public function postTypeapartment($building, $req)
    {
        // dd($req);
        // echo    '<pre>';
        // var_dump($req->toArray());
        // echo        '</pre>';
        // die();

        if (isset($req->buildingTypeApartment_id) and count($req->buildingTypeApartment_id) > 0) {
            foreach ($req->buildingTypeApartment_id as $key => $id) {
                if ($id == '0') {
                    $apartment = new Apartment;
                    $apartment->name = $req->apartment[$key];
                    $apartment->save();

                    $buildingTA = new BuildingTypeapartment;
                    $buildingTA->id_building = $req->building_id;
                    $buildingTA->id_typeapartment = $req->typeapartment_id;
                    $buildingTA->id_apartment = $apartment->id;
                    $buildingTA->id_floor = $req->floor[$key];
                    $buildingTA->save();
                } else {
                    $buildingTA = BuildingTypeapartment::find($id);
                    $buildingTA->id_typeapartment = $req->typeapartment_id;
                    $buildingTA->id_floor = $req->floor[$key];
                    $buildingTA->save();

                    $apartment = Apartment::find($buildingTA->id_apartment);
                    $apartment->name = $req->apartment[$key];
                    $apartment->save();
                }
            }


        }

        if (isset($req->typeapartment_delete) and count($req->typeapartment_delete) > 0) {
            $buildingtypeapartment = BuildingTypeapartment::whereIn('id', $req->typeapartment_delete)->get();
            foreach ($buildingtypeapartment as $key => $buildingtypeapartment) {
                $buildingtypeapartment->delete_type = '0';
                $buildingtypeapartment->save();

                $block = new ZblockBuildingtype;
                $block->name = 'delete apartment';
                $block->content = 'Xoá phòng';
                $block->target_id = $buildingtypeapartment->id;
                $block->user_id = auth()->user()->id;
                $block->save();
            }

        }

        Session::flash('active_tab', 'typeapartment');
    }

    //chinh sua phan tu
    public function getEdit($id)
    {

        $data['building'] = Building::find($id);
        $data['provinces'] = Province::get();
        $data['districts'] = (!empty($data['building']->district_id)) ? District::where('provinceid', $data['building']->province_id)->get() : array();
        $data['wards'] = (!empty($data['building']->ward_id)) ? Ward::where('districtid', $data['building']->district_id)->get() : array();

        $data['typeapartments'] = Typeapartment::select('name', 'id')
            ->where('status', '1')
            ->get();
        $data['services'] = Service::select('name', 'id')
            ->where('status', '1')
            ->get();
        $data['units'] = Unit::select('name', 'id')
            ->where('status', '1')
            ->get();
        $data['list_utilities'] = Utility::select('name', 'id')
            ->where('status', '1')
            ->get();

        $data['blockfloors'] = BuildingTypeapartment::join('building_floor', 'building_floor.id', '=', 'building_typeapartment.id_floor')
            ->where('building_typeapartment.id_building', $id)
            ->select('building_floor.name_floor', 'building_typeapartment.id_floor')
            ->groupBy('building_floor.name_floor', 'building_typeapartment.id_floor')
            ->orderBy('building_floor.name_floor', 'asc')
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
            $this->postUtilities($building, $req);
        }

        //service
        if ($req->active_tab == 'service') {
            $this->postService($building, $req);
        }

        if ($req->active_tab == 'typeapartment') {
            $this->postTypeapartment($building, $req);
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
    public function getTypeApartment(Request $req)
    {

        $dataReander['buildingType'] = BuildingTypeapartment::where([['id_building', $req->building_id], ['id_typeapartment', $req->typeapartment_id]])
            ->get();

        $dataReander['building'] = Building::find($req->building_id);
        $typeapartment = Typeapartment::find($req->typeapartment_id);
        echo '<script>
            $("#select-typeapartment").val('.$typeapartment->id.').prop("disabled",true); 
            $("#typeapartment_discription").html("<span>'.$typeapartment->description.'</span>");
        </script>';
        return view('pages.building.render.typeapartment', $dataReander);

    }

    public function renderService(Request $req){
        $service_id = $req->service_id;
        $data['service'] = Service::find($service_id);
        $data['countId'] = $req->countId;

        return view('pages.building.render.service', $data);
    }
    public function renderUtilities(Request $req){
        $utilities_id = $req->utilities_id;
        $data['utilities'] = Utility::find($utilities_id);
        $data['countId'] = $req->countId;
        $data['building'] = Building::find($req->building_id);

        return view('pages.building.render.utilities', $data);
    }


}
