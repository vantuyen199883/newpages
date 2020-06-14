<?php

namespace App\Http\Controllers\login;
use DB;
use validator;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('logins.login');
    }
    public function getlogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $errors ='Sai tài khoản hoặc mật khẩu vui lòng kiểm tra lại';
        $relust =Auth::attempt(['email' => $email, 'password' => $password]);
        if($relust){
            return view('backend.index',['user' =>Auth::user()]); 
       }
        else
        {
            Session::put('messenger','Tên tài khoản hoặc mật khẩu không đúng. Vui lòng kiểm tra lại');
            return view('logins.login',compact('errors'));
        }
    }
    public function register()
    {   
        return view('logins.register');
    }
    public function getregister(Request $request)
    {
        $data =([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password)
        ]);
        $relust = User::Create($data);
        if($relust)
        {
            Session::put('message','Đăng ký thành công');
            return redirect()->route('admin.login');
        }
        else{
            Session::put('message','Đăng ký thất bại');
            return view('logins.register');
        }
    }
}
