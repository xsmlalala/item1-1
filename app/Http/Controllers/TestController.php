<?php
namespace App\Http\Controllers;

		// require 'vendor/autoload.php';
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  Intervention\Image\Facades\Image;
// use Shixinke\Php-document-creator\Tool;
use Gregwar\Captcha\CaptchaBuilder;






class TestController extends Controller
{
    public function index(){
      // require_once()
    	// $a = new Tool();
    	// var_dump($a);
    	// $manager = new ImageManager(array('driver' => 'imagick'));
    	// // dd($manager);
      // $a = new Image;
      // var_dump($a); 
       
     //  $img = Image::make('images/avatar.jpg')->resize(200, 200);
     //  $img->insert('images/watermark.png', 'bottom-right', 15, 10);
   //=================================
    	$builder = new CaptchaBuilder;
    	// dd($builder);
		  $builder->build();
      header("Content-type: image/jpeg");
      echo "<img src='{$builder->inline()}'/>";
	//===================================
    }
}
