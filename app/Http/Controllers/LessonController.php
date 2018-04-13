<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use App\Models\User;

class LessonController extends Controller
{
     public function showProfile()
    {
    	// $redis = Redis::connection(); 
    	// dd($redis);
        // Redis::set('name', 'laravel');
        // $user=Redis::get('name');
        // // dd($user);
    //---------------------------------------------
      //       Redis::set('name', 'Taylor');  
    		// $values = Redis::lrange('names', 5, 10);  
    		// var_dump($values);
    		// 
    		// 
    		// 
    	$key = 'user:phone';

		$user = User::find(2);
		if($user){
		    //将用户名存储到Redis中
		    Redis::set($key,$user->phone);
		}
	
		// //判断指定键是否存在
		// if(Redis::exists($key)){
		//     //根据键名获取键值
		//     dd(Redis::get($key));
		// }
    }
}
