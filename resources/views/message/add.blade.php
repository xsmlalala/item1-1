@extends('public.nav')


@section('content')
	<h3>发布留言</h3>
    <form action="/doAddmessage" method="post">
    {{csrf_field()}}
	  <div class="form-group">
	    <label for="exampleInputEmail1">内容</label>
	   	<textarea class="form-control" rows="2" cols="1" placeholder="请输入留言内容" style="width: 300px;" required autofocus name="contents"></textarea>
	  </div>
	  <button type="submit" class="btn btn-default">留言</button>
	</form>
@endsection