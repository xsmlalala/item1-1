<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商品列表</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
	<center>
	<h3>商品列表</h3>
	<table class="table table-striped" style="width: 1200px;">
 		<tr align="center">
 			<td><b>编号</b></td>
 			<td><b>商品名称</b></td>
 			<td><b>商品图片</b></td>
 			<td><b>价格</b></td>
 		</tr>
 		@foreach ($goods_list as $item)
		<tr align="center">
			<td>{{$item->id}}</td>
			<td>{{$item->goods_name}}</td>
			<td>
				@if($item->goods_pic)
					<img src="{{asset('pic/'.$item->goods_pic)}}" >
				@endif
			<!-- {{$item->goods_pic}} -->

			</td>
			<td>{{$item->goods_price}}</td>
		</tr>
		@endforeach
	</table>
	<!-- <button class="btn btn-info">添加商品</button> -->
	<a href="/addgoods" class="btn btn-info" role="button">添加商品</a>
	</center>
</body>
</html>