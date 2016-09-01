<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'admin','middleware' => 'web'],function(){
    //页面访问，无登陆状态验证
        //访问登陆页面
    Route::get('/','Admin\UserController@LoginView');
    Route::get('login','Admin\UserController@LoginView');
    //执行动作
        //登陆操作，成功登陆返回加密后的密码存于cookies中
    Route::post('signup','Admin\UserController@LoginAction');
});
//Route::group(['prefix'=>'admin','middleware' => ['web','admin.login']],function(){
//
//});
