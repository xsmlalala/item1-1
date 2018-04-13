<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index(Request $request){
    	// $data = $request->session()->all();
    	$v = $request->session()->get('phone');

    	$info = Message::simplePaginate(10);
    	
    	return view("message.index",['phone' => $v,'info'=>$info]);
    }
    public function add(Request $request){
    	$v = $request->session()->get('phone');
    	return view("message.add",['phone' => $v]);
    }

    public function doadd(Request $request){
    	date_default_timezone_set('PRC');
    	$data = $request->all();
    	$mod = new Message;

    	$mod->user_phone = $request->session()->get('phone');
        $mod->contents = $request->contents;
    	// dd($contents);
    	// dd($user_phone);
        $mod->add_time = date("Y-m-d,H:i:s");
        // dd($time);
        $mod->save();
        return redirect('/message');

    }
}
