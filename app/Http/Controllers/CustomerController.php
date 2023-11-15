<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;
use App\Models\ZblockCustomer;

class CustomerController extends Controller
{
    public function getList()
    {
        $data['customers'] = Customer::where(function ($query) {
            if (isset(Session::get('search')['key'])) {
                $key = Session::get('search')['key'];
                $query->where('name', 'like', '%' . $key . '%')
                    ->orWhere('id', 'like', '%' . $key . '%')
                    ->orWhere('phone', 'like', '%' . $key . '%');
            }
        })->orderBy('id', 'desc')->paginate(5);
        return view('pages.customer.list', $data);
    }
    public function getCreate()
    {
        return view('pages.customer.create');
    }
    public function postCreate(Request $req)
    {

        $customer = new Customer;
        $customer->name = $req->name;
        $customer->gender = $req->gender;
        $customer->email = $req->email;
        $customer->phone = $req->phone;
        $customer->birthday = $req->birthday;
        $customer->cmnd_cccd = $req->cmnd_cccd;
        $customer->cmnd_date = $req->cmnd_date;
        $customer->place_of_issue = $req->place_of_issue;
        $customer->permanent_address = $req->permanent_address;
        $customer->temporay_address = $req->temporay_address;
        $customer->type = $req->type;
        $customer->save();


        $block_customer = new ZblockCustomer;
        $block_customer->name = 'create customer';
        $block_customer->content = 'Thêm mới khách hàng';
        $block_customer->target_id = $customer->id;
        $block_customer->user_id = auth()->user()->id;
        $block_customer->save();

        return redirect('/admin/customer/list');
    }

    //Hien thi chi tiet nhan vien
    public function getShow($id)
    {
        $data['customer'] = Customer::find($id);
        return view('pages.customer.view', $data);
    }


    //chinh sua phan tu
    public function getEdit($id)
    {
        $data['customer'] = Customer::find($id);
        return view('pages.customer.edit', $data);
    }
    public function postEdit(Request $req)
    {
        $customer = Customer::find($req->id);
        $customer->name = $req->name;
        $customer->gender = $req->gender;
        $customer->email = $req->email;
        $customer->phone = $req->phone;
        $customer->birthday = $req->birthday;
        $customer->cmnd_cccd = $req->cmnd_cccd;
        $customer->cmnd_date = $req->cmnd_date;
        $customer->place_of_Issue = $req->place_of_Issue;
        $customer->permanent_address = $req->permanent_address;
        $customer->temporay_address = $req->temporay_address;
        $customer->updated_at = date('Y-m-d H:m:s');
        $customer->save();

        $block_customer = new ZblockCustomer;
        $block_customer->name = 'edit customer';
        $block_customer->content = 'Cập nhật thông tin khách hàng';
        $block_customer->target_id = $customer->id;
        $block_customer->user_id = auth()->user()->id;
        $block_customer->save();

        return redirect('/admin/customer/list');
    }
    //xoa phan tu
    public function postChangeStatus($id)
    {
        $customer = Customer::find($id);
        if ($customer->status == '1') {
            $customer->status = '0';
        } else{
            $customer->status = '1';
        }
        $customer->updated_at = date('Y-m-d H:m:s');
        $customer->save();

        $block_customer = new ZblockCustomer;
        $block_customer->name = 'edit customer';
        $block_customer->content = 'Đổi trạng thái khách hàng';
        $block_customer->target_id = $customer->id;
        $block_customer->user_id = auth()->user()->id;
        $block_customer->save();

        return $customer->status;
        // return redirect('/admin/customer/list');
    }
}
