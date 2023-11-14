<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\ZblockUser;
use App\Models\ZblockProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function getList()
    {
        $data['profiles'] = Profile::where(function ($query) {
            if (isset(Session::get('search')['key'])) {
                $key = Session::get('search')['key'];
                $query->where('name', 'like', '%' . $key . '%')
                    ->orWhere('id', 'like', '%' . $key . '%')
                    ->orWhere('phone', 'like', '%' . $key . '%');
            }
        })->orderBy('id', 'desc')->paginate(5);
        return view('pages.profile.list', $data);
    }
    public function getCreate()
    {
        return view('pages.profile.create');
    }
    public function postCreate(Request $req)
    {

        $password = Str::random(6);

        $user = new User;
        $user->username = $req->email;
        $user->password = $password;
        $user->save();

        $profile = new Profile;
        $profile->name = $req->name;
        $profile->gender = $req->gender;
        $profile->email = $req->email;
        $profile->phone = $req->phone;
        $profile->birthday = $req->birthday;
        $profile->cmnd_cccd = $req->cmnd_cccd;
        $profile->cmnd_date = $req->cmnd_date;
        $profile->place_of_issue = $req->place_of_issue;
        $profile->permanent_address = $req->permanent_address;
        $profile->temporay_address = $req->temporay_address;
        $profile->type = $req->type;
        $profile->user_id = $user->id;
        $profile->save();

        if (isset($req->base64image) and $req->base64image != null) {
            // // Kiểm tra xem có dữ liệu hình ảnh dưới dạng base64 trong yêu cầu không
            // $user = User::find($user->id);
            // // Tìm hồ sơ (profile) của người dùng

            // $link = ltrim($user->avatar, "/");
            // // Lấy đường dẫn avatar hiện tại của hồ sơ (user)

            // if (file_exists($link)) {
            //     unlink($link);
            // }
            // // Kiểm tra và xóa avatar hiện tại nếu tồn tại

            $folderPath = public_path('assets/images/users/');
            // Xác định đường dẫn đến thư mục lưu trữ avatar trên ổ đĩa

            $image_parts = explode(";base64,", $req->base64image);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            // Phân tích dữ liệu hình ảnh base64 để xác định kiểu hình ảnh và nội dung

            $image_base64 = base64_decode($image_parts[1]);
            // Giải mã base64 thành dữ liệu hình ảnh

            $filename = 'avatar-' . $user->id . '.' . $image_type;
            $file = $folderPath . $filename;
            // Tạo tên tệp mới dựa trên thông tin người dùng và kiểu hình ảnh

            file_put_contents($file, $image_base64);
            // Lưu dữ liệu hình ảnh vào tệp trên ổ đĩa

            $part = 'assets/images/users/' . $filename;
            // Xác định đường dẫn mới của avatar

            // Cập nhật đường dẫn avatar trong hồ sơ
            $user->avatar = $part;
            $user->save();
        }else{
            if ($profile->gender == 'nam') {
                $user->avatar ='assets/images/users/avatar_male.png';
                $user->save();
            }else{
                $user->avatar ='assets/images/users/avatar_female.png';
                $user->save();
            }
        }

        /* Set avatar với ảnh gốc
        if ($req->hasFile('avatar')) {
            $file = $req->file('avatar');
            $style = explode('/', $file->getMimeType());
            if ($style[0] == 'image'){
                //thay đổi tên ảnh
                $filename = 'avatar-' . $user->id .'.'. $file->getClientOriginalExtension();
                // Lưu ảnh vào thư mục chỉ định trên ổ đĩa 'public'
                $part = 'assets/images/users/';
                $avatar = '/'.$part.$filename;
                $file->move($part, $filename);
                //lưu đường dẫn vào db
                $user->avatar = $avatar;
                $user->save();
            }else{
                Session::flash('status','Ảnh đại diện không hợp lệ');
                echo'<script>history.back();</script>';
            }
        }
        */

        $block_user = new ZblockProfile;
        $block_user->name = 'create profile';
        $block_user->content = 'Thêm mới nhân viên';
        $block_user->target_id = $profile->id;
        $block_user->save();

        $block_user = new ZblockUser;
        $block_user->name = 'create user';
        $block_user->content = 'Thêm mới user';
        $block_user->target_id = $user->id;
        $block_user->user_id = auth()->user()->id;
        $block_user->save();

        $data = [
            'success' => 'Mật khẩu của bạn là:',
            'password' => $password,
        ];

        Mail::send('auth.email', $data, function ($message) use ($user) {
            $message->to($user->username);
            $message->subject('Mật khẩu của bạn');
        });

        return redirect('/admin/profile/list');
    }

    //Hien thi chi tiet nhan vien
    public function getShow($id)
    {
        $data['profile'] = Profile::find($id);
        return view('profile.view', $data);
    }


    //chinh sua phan tu
    public function getEdit($id)
    {
        $data['profile'] = Profile::find($id);
        return view('profile.edit', $data);
    }
    public function postEdit(Request $req)
    {
        $profile = Profile::find($req->id);
        $profile->name = $req->name;
        $profile->gender = $req->gender;
        $profile->email = $req->email;
        $profile->phone = $req->phone;
        $profile->birthday = $req->birthday;
        $profile->cmnd_cccd = $req->cmnd_cccd;
        $profile->cmnd_date = $req->cmnd_date;
        $profile->place_of_Issue = $req->place_of_Issue;
        $profile->permanent_address = $req->permanent_address;
        $profile->temporay_address = $req->temporay_address;
        $profile->updated_at = date('Y-m-d H:m:s');
        $profile->save();

        $user = User::find($profile->users->id);

        if (isset($req->base64image) and $req->base64image != null) {
            $link = ltrim($user->avatar, "/");
            if (file_exists($link)) {
                unlink($link);
            }
            $folderPath = public_path('assets/images/users/');
            $image_parts = explode(";base64,", $req->base64image);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $filename = 'avatar-' . $user->id . '.' . $image_type;
            $file = $folderPath . $filename;
            file_put_contents($file, $image_base64);
            $part = 'assets/images/users/' . $filename;

            // Cập nhật đường dẫn avatar trong hồ sơ
            $user->avatar = $part;
            $user->save();
        }

        $block_profile = new ZblockProfile;
        $block_profile->name = 'edit profile';
        $block_profile->content = 'Cập nhật thông tin nhân viên';
        $block_profile->target_id = $profile->id;
        $block_profile->user_id = auth()->user()->id;
        $block_profile->save();

        return redirect('/admin/profile/list');
    }
    //xoa phan tu
    public function getDelete($id)
    {
        $profile = Profile::find($id);
        $profile->status = '0';
        $profile->updated_at = date('Y-m-d H:m:s');
        $profile->save();
        
        $user = User::findOrFail($profile->user_id);
        $user->status = '0';
        $user->updated_at = date('Y-m-d H:m:s');
        $user->save();
        return redirect('/admin/profile/list');
    }
    public function getProfile()
    {
        $id = auth()->user()->profile->id;
        $data['profile'] = Profile::find($id);

        return view('auth.profile', $data);
    }
    public function postProfile(Request $req)
    {
        $tab = '1';
        $profile = Profile::find($req->id);
        $profile->name = $req->name;
        $profile->phone = $req->phone;
        $profile->birthday = $req->birthday;
        $profile->updated_at = date('Y-m-d H:m:s');
        $profile->save();

        $block_profile = new ZblockProfile;
        $block_profile->name = 'edit profile';
        $block_profile->content = 'Cập nhật thông tin nhân viên';
        $block_profile->target_id = $profile->id;
        $block_profile->user_id = auth()->user()->id;
        $block_profile->save();

        return redirect('/admin/profile')->with('tab', $tab);
    }
    public function postRecoveryPassword(Request $req)
    {
        $tab = '2';
        //đặt điều kiện
        Session::flash('tab', $tab);
        $validateData = $req->validate([
            'password_old' => 'required|min:6',
            'password_new' => 'required|min:6|different:password_old',
            'password_confirm' => 'required|same:password_new',
        ], [
            'password_old.required' => 'Mật khẩu không được để trống',
            'password_old.min' => 'Mật khẩu phải trên 6 ký tự',
            'password_new.required' => 'Mật khẩu mới không được để trống',
            'password_new.min' => 'Mật khẩu phải trên 6 ký tự',
            'password_new.different' => 'Mật khẩu mới phải khác password hiện tại',
            'password_confirm.required' => 'Mật khẩu confirm không được để trống',
            'password_confirm.same' => 'Mật khẩu confirm không trùng khớp',

        ]);

        //lấy user hiện tại
        $user = auth()->user();

        //kiểm tra mật khẩu cũ
        if (!Hash::check($req->password_old, $user->password)) {
            return back()->withError([
                'password_old' => 'Mật khẩu không chính xác',
            ]);
        }

        //đặt lại mật khẩu mới
        $user->password = $req->password_new;
        $user->updated_at = date('Y-m-d H:i:s');
        $user->save();


        $block_user = new ZblockUser;
        $block_user->name = 'recovery password';
        $block_user->content = 'Đổi mật khẩu';
        $block_user->target_id = $user->id;
        $block_user->user_id = $user->id;
        $block_user->save();

        //đăng nhập lại
        Auth::login($user);
        return redirect('/admin/profile')->with(' ', $tab);
    }
}
