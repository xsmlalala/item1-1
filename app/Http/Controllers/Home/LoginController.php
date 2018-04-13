<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Auth;
use App\User;
use Gregwar\Captcha\CaptchaBuilder;
use Session;

class LoginController extends Controller
{
    public function index(){
    	return view("login.index");
    }
    // public function dologin(Request $request){
    // 	$this->validate($request, [
    //         'phone'=>'required|regex:/^1[34578][0-9]{9}$/',
    //         'password'=>'required|min:6',
    //     ]);
    //     // $user = request(['phone', 'password']);
    //     $phone = request('phone');
    //     $password = request('password');

    //     // var_dump($phone);
    //     // var_dump($password);
    //     // // die;
       
    //     // DB::connection()->enableQueryLog(); // 开启查询日志
    //     // $result = \Auth::attempt(['phone' => $phone,'password' => $password]);
    //     // $queries = DB::getQueryLog(); // 获取查询
    //     // var_dump($result);
    //     // dd($queries); // 即可查看执行的sql
    //     // die;
       
    //     if (true == \Auth::attempt(['phone' => $phone, 'password' => $password])) {
    //        return redirect('/news');
    //     }
    //     return \Redirect::back()->withErrors("手机号或密码错误");
    // }
    public function dologin(Request $request){
        // $phone = $_POST['phone'];
        $phone = $request->input('phone');
    	
    	$sel_phone = DB::select("select * from users where phone='{$phone}'");
    	if($sel_phone!=null){
    		echo json_encode(1);
    	}else{
    		echo json_encode(0);
    	}
    }
    public function code(){
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 150, $height = 70, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //把内容存入session
        Session::flash('milkcaptcha', $phrase);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }

    public function docheck(Request $request){
        // $phone = $_POST['phone'];
        // $password = $_POST['password'];
        $phone = $request->input('phone');
        $password = $request->input('password');
        $captcha = request('captcha');
        // var_dump($captcha);
        // dd(Session::get('milkcaptcha'));
// 判断session 验证码
        // if (Session::get('milkcaptcha') != $captcha) {
        //         return redirect('/login');    
        // }
        // $user = new User;
        // $request->session()->put('users', $user);
        $check = DB::select("select * from users where phone='{$phone}' and password='{$password}'");
        if ($check != null) {
                $id = DB::select("select id from users where phone='{$phone}'");
                $request->session()->put('phone', $phone);
                $request->session()->put('id', $id);
                // var_dump(Session::get('milkcaptcha'));
                // dd($request->session()->all());
        // dd($request->session());die;
            return redirect('/message');
        }else{
            return redirect('/login');
            // return back()->with('error','密码错误');
        }
    }


    public function out(Request $request){
        $request->session()->flush();
        return redirect('/login');
    }
}
