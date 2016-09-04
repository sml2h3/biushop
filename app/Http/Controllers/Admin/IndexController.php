<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CommonController;
use App\Http\Requests;
use Redirect, Auth;
use Illuminate\Support\Facades\Input;
use App\Http\Model\Admin;
class IndexController extends CommonController
{
    public $result;
    public function __construct()
    {
        $this->result = Admin::where('admin_name',session('user_name'))->first();
    }
    //访问页面 经过中间件admin.login，不符合的会直接回到登陆首页
        //访问欢迎页
    public function IndexView(){
        return view('admin.dash');
    }
        //访问网站基础设置页
    public function SetView(){
        return view('admin.setting');
    }
    public function UserView(){
        return view('admin.users');
    }
}
