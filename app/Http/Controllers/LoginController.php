<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\ZblockUser;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function getLogin(){
        //check đăng nhập
        if (Auth::check()){
            return redirect('/admin/home');
        }
        return view('auth.login');
    }

    public function postLogin(Request $req){
        //validate
        $credentials = $req->validate([
            'username'=> 'required|min:6|exists:users',
            'password'=> 'required|min:6 '
        ],[
            'username.required' => 'Tên đăng nhập không được để trống',
            'username.min' => 'Tên đăng nhập phải trên 6 ký tự',
            'username.exists' => 'Tên đăng nhập không tồn tại',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu phải trên 6 ký tự'
        ]);

        //req lấy data tu req và kiem tra dang nhap bang attempt
        $credentials = $req->only('username', 'password');

        if(Auth::attempt($credentials)){
            return  redirect('/admin/home');
        }
        $user = User::where('username', $credentials['username'])->first();
        
        $block_user = new ZblockUser;
        $block_user->name = 'Login danger';
        $block_user->content = 'Sai mật khẩu';
        $block_user->target_id = $user->id;
        $block_user->user_id = $user->id;
        $block_user->save();

        return back()->withError([
            'password'=>'Mật khẩu không chính xác'
        ]);
    }

    //đăng xuất
    public function getLogout()
    {
        auth()->logout();
        return redirect('/login');
    }


    //Reset mật khẩu
    public function getResetPassword()
    {
        return view('auth.reset_password');
    }
    public function postResetPassword(Request $req)
    {
        //Kiểm tra input
        $validateData = $req->validate([
            'username' => 'required|string|email|max:255|exists:users',
        ],[
            'username.required' => 'email không được để trống',
            'username.string' => 'email có định dạng chưa đúng',
            'username.email' => 'email có định dạng chưa đúng',
            'username.max' => 'email có định dạng chưa đúng',
            'username.exists' => 'email không tồn tại',
        ]);
        
        //tìm user name trong db
        $user = User::where('username',$req->username)->first();
        if(!$user)
        {
            return back()->with('success','email không tồn tại');
        }

        //tạo mk mới 6 số
        // $password = random_int(100000, 999999);
        $password = Str::random(6);
        $user->password = $password;
        $user->updated_at= date('Y-m-d H:m:s');
        $user->save();

        $block_user = new ZblockUser;
        $block_user->name='reset password';
        $block_user->content='Đặt lại mật khẩu';
        $block_user->target_id= $user->id;
        $block_user->user_id=$user->id;
        $block_user->save();

        //tạo mail gửi đi
        $data = [
            'success' => 'Mật khẩu mới của bạn là:',
            'password' => $password,
        ];

        Mail::send('auth.email', $data, function($message) use ($user){
            $message->to($user->username);
            $message->subject('Mật khẩu mới');
        });

        return redirect()->back()->with('success','Chúng tôi đã gửi mật khẩu mới đến địa chỉ email của bạn. Vui lòng kiểm tra email của bạn để đăng nhập.');
    }
}
