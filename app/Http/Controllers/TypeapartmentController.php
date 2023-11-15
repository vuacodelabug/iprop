<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Typeapartment;
use Illuminate\Support\Facades\Session;
use App\Models\ZblockHistory;

class TypeapartmentController extends Controller
{
    public function getList()
    {
        $this->isSearch();
        $data['typeapartments'] = Typeapartment::where(function ($query) {
            if (isset(Session::get('search')['key'])) {
                $key = Session::get('search')['key'];
                $query->where('name', 'like', '%' . $key . '%')
                    ->orWhere('description', 'like', '%' . $key . '%');
            }
        })->orderBy('id', 'desc')->paginate(20);
        
        return view('pages.typeapartment.list', $data);
    }
    
    public function postCreate(Request $req)
    {
        $this->validateData($req);
        $typeapartment = new Typeapartment;
        $typeapartment->name = $req->name;
        $typeapartment->description = $req->description;
        $typeapartment->save();


        $block_user = new ZblockHistory;
        $block_user->name = 'create typeapartment';
        $block_user->content = 'Thêm mới loại phòng';
        $block_user->user_id = auth()->user()->id;
        $block_user->target_id = $typeapartment->id;
        $block_user->save();

        return redirect('/admin/typeapartment/list');
    }

    //chinh sua phan tu
    public function getEdit($id)
    {
        $data['typeapartment'] = Typeapartment::find($id);
        return view('typeapartment.edit', $data);
    }
    public function postEdit(Request $req)
    {
        $this->validateData($req);

        $typeapartment = Typeapartment::find($req->id);
        $typeapartment->name = $req->name;
        $typeapartment->description = $req->description;
        $typeapartment->status = $req->status;
        $typeapartment->save();
     
        $block_typeapartment = new ZblockHistory;
        $block_typeapartment->name = 'edit typeapartment';
        $block_typeapartment->content = 'Cập nhật thông tin loại phòng';
        $block_typeapartment->target_id = $typeapartment->id;
        $block_typeapartment->user_id = auth()->user()->id;
        $block_typeapartment->save();

        
        return $typeapartment;
    }
    //xoa phan tu
    public function getDelete($id)
    {
        $typeapartment = Typeapartment::find($id);
        $typeapartment->status = '0';
        $typeapartment->updated_at = date('Y-m-d H:m:s');
        $typeapartment->save();
        
        $block_typeapartment = new ZblockHistory;
        $block_typeapartment->name = 'delete typeapartment';
        $block_typeapartment->content = 'Xoá loại phòng';
        $block_typeapartment->target_id = $typeapartment->id;
        $block_typeapartment->user_id = auth()->user()->id;
       $block_typeapartment->save();

        return redirect('/admin/typeapartment/list');
    }


    public function postFind(Request $req){
        $typeapartment = Typeapartment::find($req->id);
        return ($typeapartment)? $typeapartment : 0;
    }
   
}
