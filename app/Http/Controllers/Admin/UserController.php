<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Admin\CommonController;
use Illuminate\Support\Facades\Crypt;
use Redirect, Auth;
use Illuminate\Support\Facades\Input;
use App\Http\Model\Admin;
class UserController extends CommonController
{
    //页面访问
        //访问登陆页（admin/login）
    public function LoginView(){
        return view('admin.login');
    }


    //执行动作
        //进行登录，登陆成功将加密后的用户名和密码存于cookies中
        //使用laravel内置的加密
    public function LoginAction(){
        if (Input::all()){
            $result = Admin::where('admin_name',Input::get('username'))->first();
            if ($result){
                $pass_decode = Crypt::decrypt($result->admin_password);
                if ($pass_decode == Input::get('password')){
                    session(['user_name'=>Input::get('username'),'user_pass'=>$result->admin_password]);
                    return view('admin.manage');
                }else{
                    return view('admin.login')->with("msg","账号或者密码错误");
                }
            }else{
                return view('admin.login')->with("msg","账号不存在");
            }
        }else{
            return view('admin.login')->with("msg","未输入账号信息");
        }
    }
}
