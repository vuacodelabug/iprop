<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utility;
use Illuminate\Support\Facades\Session;
use App\Models\ZblockHistory;

class UtilitiesController extends Controller
{
    public function getList()
    {
        $this->isSearch();
        $data['utilitiess'] = Utility::where(function ($query) {
            if (isset(Session::get('search')['key'])) {
                $key = Session::get('search')['key'];
                $query->where('name', 'like', '%' . $key . '%')
                    ->orWhere('description', 'like', '%' . $key . '%');
            }
        })->orderBy('id', 'desc')->paginate(20);
        
        return view('pages.utilities.list', $data);
    }
    
    public function postCreate(Request $req)
    {
        $this->validateData($req);
        $utilities = new Utility;
        $utilities->name = $req->name;
        $utilities->description = $req->description;
        $utilities->save();


        $block_user = new ZblockHistory;
        $block_user->name = 'create utilities';
        $block_user->content = 'Thêm mới tiện ích ';
        $block_user->user_id = auth()->user()->id;
        $block_user->target_id = $utilities->id;
        $block_user->save();

        return redirect('/admin/utilities/list');
    }

    //chinh sua phan tu
    public function getEdit($id)
    {
        $data['utilities'] = Utility::find($id);
        return view('utilities.edit', $data);
    }
    public function postEdit(Request $req)
    {
        $this->validateData($req);

        $utilities = Utility::find($req->id);
        $utilities->name = $req->name;
        $utilities->description = $req->description;
        $utilities->status = $req->status;
        $utilities->save();
     
        $block_utilities = new ZblockHistory;
        $block_utilities->name = 'edit utilities';
        $block_utilities->content = 'Cập nhật thông tin tiện ích ';
        $block_utilities->target_id = $utilities->id;
        $block_utilities->user_id = auth()->user()->id;
        $block_utilities->save();

        
        return $utilities;
    }
    //xoa phan tu
    public function getDelete($id)
    {
        $utilities = Utility::find($id);
        $utilities->status = '0';
        $utilities->updated_at = date('Y-m-d H:m:s');
        $utilities->save();
        
        $block_utilities = new ZblockHistory;
        $block_utilities->name = 'delete utilities';
        $block_utilities->content = 'Xoá tiện ích ';
        $block_utilities->target_id = $utilities->id;
        $block_utilities->user_id = auth()->user()->id;
       $block_utilities->save();

        return redirect('/admin/utilities/list');
    }


    public function postFind(Request $req){
        $utilities = Utility::find($req->id);
        return ($utilities)? $utilities : 0;
    }
   
}
