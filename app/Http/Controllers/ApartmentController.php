<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Apartment;
use Illuminate\Support\Facades\Session;
use App\Models\ZblockHistory;


class ApartmentController extends Controller
{
    public function getList()
    {
        $data['apartments'] = Apartment::where(function ($query) {
            if (isset(Session::get('search')['key'])) {
                $key = Session::get('search')['key'];
                $query->where('name', 'like', '%' . $key . '%')
                    ->orWhere('address', 'like', '%' . $key . '%')
                    ->orWhere('description', 'like', '%' . $key . '%');
            }
        })->orderBy('id', 'desc')->paginate(20);

        return view('pages.apartment.list', $data);
    }

    public function postCreate(Request $req)
    {
        $this->validateData($req);

        $apartment = new Apartment;
        $apartment->name = $req->name;
        $apartment->description = $req->description;
        $apartment->save();


        $block_user = new ZblockHistory;
        $block_user->name = 'create apartment';
        $block_user->content = 'Thêm mới phòng';
        $block_user->user_id = auth()->user()->id;
        $block_user->target_id = $apartment->id;
        $block_user->save();

        return redirect('/admin/apartment/list');
    }

    //chinh sua phan tu
    public function getEdit($id)
    {
        $data['apartment'] = Apartment::find($id);
        return view('apartment.edit', $data);
    }
    public function postEdit(Request $req)
    {
        $this->validateData($req);

        $apartment = Apartment::find($req->id);
        $apartment->name = $req->name;
        $apartment->description = $req->description;
        $apartment->status = $req->status;
        $apartment->save();

        $block_apartment = new ZblockHistory;
        $block_apartment->name = 'edit apartment';
        $block_apartment->content = 'Cập nhật thông tin phòng';
        $block_apartment->target_id = $apartment->id;
        $block_apartment->user_id = auth()->user()->id;
        $block_apartment->save();


        return $apartment;
    }
    //xoa phan tu
    public function getDelete($id)
    {
        $apartment = Apartment::find($id);
        $apartment->status = '0';
        $apartment->updated_at = date('Y-m-d H:m:s');
        $apartment->save();

        $block_apartment = new ZblockHistory;
        $block_apartment->name = 'delete apartment';
        $block_apartment->content = 'Xoá phòng';
        $block_apartment->target_id = $apartment->id;
        $block_apartment->user_id = auth()->user()->id;
        $block_apartment->save();

        return redirect('/admin/apartment/list');
    }


    public function postFind(Request $req)
    {
        $apartment = Apartment::find($req->id);
        return ($apartment) ? $apartment : 0;
    }
}
