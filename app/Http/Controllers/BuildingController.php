<?php

namespace App\Http\Controllers;

use App\Models\BuildingTypeapartment;
use App\Models\BuildingUtilities;
use App\Models\BuildingService;
use App\Models\Province;
use App\Models\District;
use App\Models\Ward;
use App\Models\Apartment;
use App\Models\BuildingFloor;
use App\Models\Typeapartment;
use App\Models\Utilities;
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
    // Hiển thị danh sách các tòa nhà
    public function getList()
    {
        $this->isSearch();
        // Truy vấn database và trả về trang danh sách
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
    // Hiển thị form tạo mới tòa nhà
    public function getCreate()
    {
        // Lấy danh sách tỉnh/thành phố
        $data['provinces'] = Province::select('provinceid', 'name')->get();

        return view('pages.building.create', $data);
    }

    // Xử lý khi người dùng gửi form tạo mới tòa nhà
    public function postCreate(createBuildingRequest $req)
    {
        $building = new Building;
        $building->logo = 'assets/images/buiding-logo/logo-0.png';
        $this->postDetail($building, $req);
        return redirect('/admin/building/edit/' . $building->id);
    }
    // Hiển thị mô tả của các loại dịch vụ theo ID
    public function getDiscription($id)
    {
        switch (request('active_tab')) {
            case 'utilities': {
                    $utilities = Utilities::select('description')
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
    // Xử lý lưu thông tin chi tiết của tòa nhà
    public function postDetail($building, $req)
    {

        $building->name = $req->building_name;
        $building->address = $req->building_address;
        $building->province_id = $req->province_id;
        $building->district_id = $req->district_id;
        $building->ward_id = $req->ward_id;
        $building->save();
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
        //         BuildingUtilities::where('id_building', $building_id)
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
    // Xử lý lưu thông tin về utilities của tòa nhà
    public function postUtilities($building, $req)
    {
        // Lưu thông tin về utilities của tòa nhà
        if (isset($req->buildingutilities_id) and count($req->buildingutilities_id) > 0) {
            foreach ($req->buildingutilities_id as $key => $id) {

                if ($id == '0') {
                    $buildingutilities = new BuildingUtilities;
                    $buildingutilities->id_building = $req->building_id;
                    $buildingutilities->id_utilities = $req->utilities_id[$key];
                    $buildingutilities->id_floor = $req->floor_id[$key];
                    $buildingutilities->save();
                } else {
                    $buildingutilities = BuildingUtilities::find($id);
                    $buildingutilities->id_building = $req->building_id;
                    $buildingutilities->id_utilities = $req->utilities_id[$key];
                    $buildingutilities->id_floor = $req->floor_id[$key];
                    $buildingutilities->save();
                }
            }
        }
        // Xóa các bản ghi utilities nếu có yêu cầu xóa
        if (isset($req->utilities_delete) and count($req->utilities_delete) > 0) {
            $buildingutilities = BuildingUtilities::whereIn('id', $req->utilities_delete)->get();
            foreach ($buildingutilities as $key => $buildingutilities) {
                $buildingutilities->delete();
            }

        }
        Session::flash('active_tab', 'service');
    }
    // Xử lý lưu thông tin về service của tòa nhà
    public function postService($building, $req)
    {
        // dd($req);
        // echo    '<pre>';
        // var_dump($req->toArray());
        // echo        '</pre>';

        // Lưu thông tin về service của tòa nhà
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

        // Xóa các bản ghi service nếu có yêu cầu xóa
        if (isset($req->service_delete) and count($req->service_delete) > 0) {
            $buildingservice = BuildingService::whereIn('id', $req->service_delete)->get();
            foreach ($buildingservice as $key => $buildingservice) {
                $buildingservice->delete();
            }
        }
        Session::flash('active_tab', 'typeapartment');
    }
    // Xử lý lưu thông tin về typeapartment của tòa nhà
    public function postTypeapartment($building, $req)
    {
        // dd($req);
        // echo    '<pre>';
        // var_dump($req->toArray());
        // echo        '</pre>';
        // die();

        // Lưu thông tin về typeapartment của tòa nhà
        if (isset($req->buildingTypeApartment_id) and count($req->buildingTypeApartment_id) > 0) {
            foreach ($req->buildingTypeApartment_id as $key => $id) {
                if ($id == '0') {
                    $apartment = new Apartment;
                    $apartment->name = $req->apartment[$key];
                    $apartment->id_building = $req->building_id;
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
        // Xóa các bản ghi typeapartment nếu có yêu cầu xóa
        if (isset($req->typeapartment_delete) and count($req->typeapartment_delete) > 0) {

            $buildingTA = BuildingTypeapartment::whereIn('id', $req->typeapartment_delete)->get();

            foreach ($buildingTA as $key => $buildingTA) {
                $buildingTA->_delete = '0';
                $buildingTA->status = '0';
                $buildingTA->save();


                $apartment = Apartment::find($buildingTA->id_apartment);
                $apartment->_delete = '0';
                $apartment->save();

                $block = new ZblockBuildingtype;
                $block->name = 'delete TypeApartment';
                $block->content = 'Xoá loại phòng';
                $block->target_id = $buildingTA->id;
                $block->user_id = auth()->user()->id;
                $block->save();
            }
        }

        Session::flash('active_tab', 'typeapartment');
    }

    // Hiển thị trang chỉnh sửa tòa nhà
    public function getEdit($id)
    {   
        // Lấy thông tin của tòa nhà theo ID
        $data['building'] = Building::find($id);

        // Lấy danh sách tỉnh/thành phố
        $data['provinces'] = Province::get();

        // Lấy danh sách quận/huyện dựa trên tỉnh/thành phố được chọn
        $data['districts'] = (!empty($data['building']->district_id)) ? District::where('provinceid', $data['building']->province_id)->get() : [];

        // Lấy danh sách phường/xã dựa trên quận/huyện được chọn
        $data['wards'] = (!empty($data['building']->ward_id)) ? Ward::where('districtid', $data['building']->district_id)->get() : [];

        // Lấy danh sách loại phòng
        $data['typeapartments'] = Typeapartment::select('name', 'id')
            ->where('status', '1')
            ->get();

        // Lấy danh sách dịch vụ 
        $data['services'] = Service::select('name', 'id')
            ->where('status', '1')
            ->get();

        // Lấy danh sách đơn vị tính
        $data['units'] = Unit::select('name', 'id')
            ->where('status', '1')
            ->get();

        // Lấy danh sách tiện ích 
        $data['list_utilities'] = Utilities::select('name', 'id')
            ->where('status', '1')
            ->get();

        // Lấy danh sách tầng và loại phòng trong tòa nhà
        $data['blockfloors'] = BuildingTypeapartment::join('building_floor', 'building_floor.id', '=', 'building_typeapartment.id_floor')
            ->where('building_typeapartment.id_building', $id)
            ->select('building_floor.name_floor', 'building_typeapartment.id_floor')
            ->groupBy('building_floor.name_floor', 'building_typeapartment.id_floor')
            ->orderBy('building_floor.code_floor', 'asc')
            ->where('building_typeapartment._delete', 1)
            ->get();

        return view('pages.building.edit', $data);
    }
    
    // Xử lý khi người dùng gửi form chỉnh sửa tòa nhà
    public function postEdit(Request $req)
    {
        $building = Building::find($req->building_id);


        switch ($req->active_tab) {
            case 'detail':
                $this->postDetail($building, $req);
                break;

            case 'utilities':
                $this->postUtilities($building, $req);
                break;

            case 'service':
                $this->postService($building, $req);
                break;

            case 'typeapartment':
                $this->postTypeapartment($building, $req);
                break;
        }

        return redirect('/admin/building/edit/' . $req->building_id);
    }
    // Thay đổi trạng thái (hiển thị/ẩn) của tòa nhà
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

    // Hiển thị trang xem chi tiết tòa nhà
    public function getShow($id)
    {
        $data['building'] = Building::find($id);
        return view('pages.building.view', $data);
    }

    public function getTypeApartment(Request $req)
    {
        // Lấy danh sách các bản ghi của BuildingTypeapartment dựa trên building_id và typeapartment_id 
        $dataReander['buildingType'] = BuildingTypeapartment::where([
            ['id_building', $req->building_id],
            ['id_typeapartment', $req->typeapartment_id],
            ['_delete', 1]
        ])->get();
        // Lấy thông tin của tòa nhà
        $dataReander['building'] = Building::find($req->building_id);
        // Lấy thông tin của loại phòng và gửi dữ liệu về
        $typeapartment = Typeapartment::find($req->typeapartment_id);

        echo '<script>
                    $("#select-typeapartment").val(' . $typeapartment->id . ').prop("disabled",true); 
                    $("#typeapartment_discription").html("<span>' . $typeapartment->description . '</span>");
                </script>';
        return view('pages.building.render.typeapartment', $dataReander);

    }

    public function renderService(Request $req)
    {
        $service_id = $req->service_id;
        $data['service'] = Service::find($service_id);
        $data['countId'] = $req->countId;

        return view('pages.building.render.service', $data);
    }
    public function renderUtilities(Request $req)
    {
        $utilities_id = $req->utilities_id;
        $data['utilities'] = Utilities::find($utilities_id);
        $data['countId'] = $req->countId;
        $data['building'] = Building::find($req->building_id);

        return view('pages.building.render.utilities', $data);
    }
    public function renderTypeApartment(Request $req)
    {
        $typeapartment_id = $req->typeapartment_id;
        $data['typeapartment_id'] = $typeapartment_id;
        $data['countId'] = $req->countId;
        $data['building'] = Building::find($req->building_id);
        $data['typeapartment_numb']= $req->typeapartment_numb;
        $data['floor_id']= $req->floor_id;
        $data['page'] = 'pageCreate';
        return view('pages.building.render.typeapartment', $data);
    }


}
