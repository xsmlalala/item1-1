<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', "\App\Http\Controllers\Home\LoginController@index");
Route::get('/register', "\App\Http\Controllers\RegisterController@index");
Route::get('/test', "\App\Http\Controllers\TestController@index");  // 测试包
Route::get('/yzm/{tmp}', "\App\Http\Controllers\Home\LoginController@code");  // 验证码
Route::get('/lesson', "\App\Http\Controllers\LessonController@showProfile");  // redis
Route::get('/news', "\App\Http\Controllers\NewsController@index");//查看商品
Route::get('/addgoods', "\App\Http\Controllers\NewsController@add");//添加商品页面
Route::get('/message', "\App\Http\Controllers\MessageController@index");//查看留言
Route::get('/addmessage', "\App\Http\Controllers\MessageController@add");//查看留言
Route::get('/loginout', "\App\Http\Controllers\Home\LoginController@out");//退出

Route::post('/doregister',"\App\Http\Controllers\RegisterController@doregister");
Route::post('/dologin',"\App\Http\Controllers\Home\LoginController@dologin");
Route::post('/docheck',"\App\Http\Controllers\Home\LoginController@docheck");
Route::post('/doadd',"\App\Http\Controllers\NewsController@upload");//执行添加商品操作
Route::post('/doAddmessage',"\App\Http\Controllers\MessageController@doadd");//执行添加留言操作

