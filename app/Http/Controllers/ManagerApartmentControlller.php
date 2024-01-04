<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuildingTypeapartment;
use App\Models\Building;
use App\Models\Apartment;

class ManagerApartmentControlller extends Controller
{
    public function getIndex()
    {
        $data['buildings'] = Building::select('id', 'name', 'address')->get();
        return view('pages.manager.apartment.index', $data);
    }
    public function getIndexContent(Request $req)
    {  
        // Gửi danh sách name_floor, id_floor sắp sếp tăng dần theo code_floor
        $data['blockfloors'] = BuildingTypeapartment::join('building_floor', 'building_floor.id', '=', 'building_typeapartment.id_floor')
            ->where('building_typeapartment.id_building', $req->building_id)
            ->select('building_floor.name_floor', 'building_typeapartment.id_floor')
            ->groupBy('building_floor.name_floor', 'building_typeapartment.id_floor')
            ->orderBy('building_floor.code_floor', 'asc')
            ->where('building_typeapartment._delete', 1)
            ->get();

        // lấy status của phòng theo id toà nhà
        $data['apartment'] = Apartment::select('status')
        ->where('id_building', $req->building_id)
        ->where('_delete', 1)
        ->get();
        
        return view('pages.manager.apartment.index-content', $data);
    }

}
