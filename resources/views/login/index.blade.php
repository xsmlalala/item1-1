@extends('public.nav')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>登录</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
	<script src="{{'js/require.js'}}" data-main="{{asset('js/main')}}"></script>
	<style>
		body{
    	background: #FBEFCD;
    	color:black;
		}
	</style>
</head>
<body>
	<center>
	<h3>登录</h3>
	<form action="/docheck" method="post"> 
	{{csrf_field()}}
	<div class="form-group">
		<label for="exampleInputEmail1">手机号 :</label>
		<input type="tel" class="form-control" id="user_phone" placeholder="请输入电话" style="width:300px;" name="phone" required autofocus>
		<span id="mess_phone"></span>
    </div>
	<div class="form-group">
		<label for="exampleInputPassword1">密码 :</label>
    	<input type="password" class="form-control" id="user_pass" placeholder="请输入密码" style="width:300px;" name="password" required autofocus>
    	<span id="mess_pass"></span>
  	</div>
  	<div class="form-group">
		<label for="exampleInputPassword1">验证码 :</label>
    	<input type="text" class="form-control" id="user_yzm" placeholder="请输入验证码" style="width:130px;margin-left: -159px;" name="captcha" required autofocus>
    	<img src="{{ URL('yzm/1') }}" style="margin-left: 155px;margin-top: -67px;" id="change" onclick="this.src='{{URL('yzm')}}/'+Math.random()">
    	<span id="mess_pass"></span>
  	</div>
  <!-- 	@include('layout.error') -->
	<button type="submit" class="btn btn-primary" id="btn">登录</button><br><br>
	</form>
	<a href="/register" style=" text-decoration:none; ">还没有账号?点此处去注册</a>

	</center>
</body>
</html>
@endsection
