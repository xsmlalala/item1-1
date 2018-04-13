<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
    	return view("register.index");
    }
    public function doregister(){

    	$rules = [
    		'phone'=>'required|regex:/^1[34578][0-9]{9}$/|unique:user,phone',
    		'password'=>'required|min:6|confirmed',
    		'password_confirmation'=>'required',
    	];
    	$messages = [
    		// 'phone.required'=>'电话号必填',
    		'password.required'=>'密码必填,且在6位以上',
    		// 'password_confirmation.required'=>'确认密码必填'
            'phone.regex' => '请输入有效的电话号码',
            'phone.unique' => '该电话已使用',
    	];

    	request()->validate($rules,$messages);
    	$user = new User;
    	$user->phone = request()->phone;
    	$user->password = request()->password;
    	$user->save();
    	return redirect('/login');
    }
}
