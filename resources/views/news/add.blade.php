<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加商品</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
</head>
</head>
<body>
	<center>
	<h3>添加商品</h3>
	<form action="/doadd" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
	  <div class="form-group">
	    <label for="exampleInputEmail1">商品名称</label>
	    <input type="text" class="form-control" name="goods_name" placeholder="请输入商品名称" style="width:300px;" required autofocus>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputFile">商品图片</label>
	    <input type="file" name="goods_pic" required autofocus>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">商品价格</label>
	    <input type="number" class="form-control" name="goods_price" placeholder="请输入商品价格" style="width:300px;" required autofocus>
	  </div>
	  <button type="submit" class="btn btn-default">添加</button>
	</form><br>
	  <a href="/news" class="btn btn-info" role="button">商品列表</a>
	</center>
</body>
</html>