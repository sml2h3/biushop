<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Model\Admin;
use Illuminate\Support\Facades\Crypt;

class AdminUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (session('user_name')&&session('user_pass')){
            $result = Admin::where('admin_name',session('user_name'))->first();
            if (!$result){
                return view('admin.login')->with("msg","账号信息有误");
            }else{
                if(Crypt::decrypt($result->admin_password) != session('user_pass')){
                    return view('admin.login')->with("msg","密码错误");
                }
            }
        }else{
            return view('admin.login')->with("msg","未输入账号信息");
        }
        return $next($request);
    }
}
