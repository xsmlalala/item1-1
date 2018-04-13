<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
	<style>
		body{
    	background: #FBEFCD;
    	color:black;
		}
	</style>
</head>
<body>
	@isset($phone)
	<div style="margin-left: 85%;margin-top: 1%;">欢迎 :{{ $phone }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/loginout" class="btn btn-default" role="button">退出</a></div>
	@endisset
	<center>
	
	<a href="/message" style=" text-decoration:none; ">查看留言</a>
	@isset($phone)
	<a href="/addmessage" style=" text-decoration:none; ">发布留言</a>
	<a href="/news" style=" text-decoration:none; ">查看商品</a>
	@endisset
	<div>
		@yield('content')
	</div>
	</center>
</body>
</html>