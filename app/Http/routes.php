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
    return view('index');
});
// Route::get('/qq', function () {
//     return view('index');
// });
Route::get('/test', function () {
    return view('admin.form');
});

Route::post('/test', function () {
    return 'hello post提交';
});

Route::put('/test', function () {
    return 'hello put提交';
});

Route::delete('/test',function() {
    return 'hello delete提交';
});

//多种请求路由
Route::match(['get','post','put'], '/aa', function () {
    return 'hello 多重注册路由';
});

Route::get('/demo/{id?}',function($id = null)
{
    return 'hello'.$id;
})->where('id','[0-9a-z]+');

//控制器
Route::get('/demo1','admin\UserController@create');

// 资源路由
Route::resource('/user','admin\demoController');

//===========模板继承==============
Route::any('/demo2','admin\AdminController@index');

Route::resource('users','admin\UsersController');