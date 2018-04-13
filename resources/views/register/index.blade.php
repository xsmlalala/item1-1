<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
	<style>
		body{
    	background: #FBEFCD;
    	color:black;
		}
	</style>
</head>
<body>
	<center>
	<h3>注册</h3>
	<form action="/doregister" method="post">
	 {{csrf_field()}}
<!-- 	电话:<input type="text" name="phone"><br><br>
	密码:<input type="password" name="password"><br><br>
	确认密码:<input type="password" name="password_confirmation"><br><br> -->
	<div class="form-group">
		<label for="exampleInputEmail1">手机号 :</label>
		<input type="tel" class="form-control" id="exampleInputEmail1" placeholder="请输入正确格式的有效电话" style="width:300px;" name="phone" required autofocus>
    </div>
    <div class="form-group">
		<label for="exampleInputPassword1">密码 :</label>
    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="请输入6位及以上字母数字下划线" style="width:300px;" name="password" required autofocus>
  	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">确认密码 :</label>
    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="请再次输入密码" style="width:300px;" name="password_confirmation" required autofocus>
  	</div>

  	@include('layout.error')
	<button type="submit" class="btn btn-primary">注册</button><br><br>
	</form>
	<a href="/login" style=" text-decoration:none; ">返回登录</a>
	</center>
</body>
</html>