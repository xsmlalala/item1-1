<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Good;
// use Illuminate\Support\Facades\Storage;
use Storage;

class NewsController extends Controller
{
	public function index()
	{
  //   	$datas = DB::select('select * from goods');
		// return view("news.index", ['datas' => $datas]);
		$goods_list = Good::paginate(20);
		return view("news.index",compact('goods_list'));
    }

    public function add()
    {
    	return view("news.add");
    }

    public function upload(Request $request)
    {
        
        if ($request->isMethod('POST')) {

            // $goods = $request->all();
            // dd($goods);
            $file = $request->file('goods_pic');
            $file_name = $file->getClientOriginalName();//文件原名
            $file_ext = $file->getClientOriginalExtension();//文件扩展名
            $file_type = $file->getClientMimeType();//文件类型
            $file_path = $file->getRealPath();  //临时文件的绝对路径
            $file_error = $file->getError();  //上传文件错误
            $file_size = $file->getClientSize();//文件大小
            // dd($file);
            if ($file_error > 0) {
                $message = $file_error;
            }elseif($file_size > 1048576){
                $message = "上传文件不能大于1MB";
            }else{
                $filename = date("Y-m-d,H:i:s")."-".uniqid().".".$file_ext;
                
                // $bool = Storage::disk('uploads')->put($filename, file_get_contents($file_path));
                // dd($bool);


                // $a = $file -> move(app_path().'/public/uploads',$filename);//失败
                $path = $request->file('goods_pic')->store('uploads');//成功
                // var_dump($bool);die;

                // $path = $request->file('goods_pic')->storeAS('public/uploads',$filename);

                // dd($path);
                

                //----------------------------
                    // $goods_name = $request->input('goods_name'); 
                    // $goods_pic = $path; 
                    // $goods_price = $request->input('goods_price'); 
                //----------------------------
                $good = new Good;
                $good->goods_name = request()->goods_name;
                $good->goods_pic = $path;
                $good->goods_price = request()->goods_price;
                $good->save();
                return redirect('/news');
            }          
        }
    }

}