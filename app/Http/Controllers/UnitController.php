<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use Illuminate\Support\Facades\Session;
use App\Models\ZblockHistory;

class UnitController extends Controller
{
    public function getList()
    {
        $this->isSearch();
        $data['units'] = Unit::where(function ($query) {
            if (isset(Session::get('search')['key'])) {
                $key = Session::get('search')['key'];
                $query->where('name', 'like', '%' . $key . '%')
                    ->orWhere('description', 'like', '%' . $key . '%');
            }
        })->orderBy('id', 'desc')->paginate(20);

        return view('pages.unit.list', $data);
    }

    public function postCreate(Request $req)
    {
        $this->validateData($req);
        $unit = new Unit;
        $unit->name = $req->name;
        $unit->description = $req->description;
        $unit->save();


        $block_user = new ZblockHistory;
        $block_user->name = 'create unit';
        $block_user->content = 'Thêm mới đơn vị';
        $block_user->user_id = auth()->user()->id;
        $block_user->target_id = $unit->id;
        $block_user->save();

        return redirect('/admin/unit/list');
    }

    //chinh sua phan tu
    public function getEdit($id)
    {
        $data['unit'] = Unit::find($id);
        return view('unit.edit', $data);
    }
    public function postEdit(Request $req)
    {
        $this->validateData($req);

        $unit = Unit::find($req->id);
        $unit->name = $req->name;
        $unit->description = $req->description;
        $unit->status = $req->status;
        $unit->save();

        $block_unit = new ZblockHistory;
        $block_unit->name = 'edit unit';
        $block_unit->content = 'Cập nhật thông tin đơn vị';
        $block_unit->target_id = $unit->id;
        $block_unit->user_id = auth()->user()->id;
        $block_unit->save();


        return $unit;
    }
    //xoa phan tu
    public function getDelete($id)
    {
        $unit = Unit::find($id);
        $unit->status = '0';
        $unit->updated_at = date('Y-m-d H:m:s');
        $unit->save();

        $block_unit = new ZblockHistory;
        $block_unit->name = 'delete unit';
        $block_unit->content = 'Xoá đơn vị';
        $block_unit->target_id = $unit->id;
        $block_unit->user_id = auth()->user()->id;
        $block_unit->save();

        return redirect('/admin/unit/list');
    }


    public function postFind(Request $req)
    {
        $unit = Unit::find($req->id);
        return ($unit) ? $unit : 0;
    }

}
