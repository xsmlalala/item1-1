@extends('public.nav')

@section('content')
	<h3>留言列表</h3>
    <!-- <a href="/login">返回登录</a> -->
    <table class="table table-striped" style="width: 900px;">
    	<tr align="center">
    		<td>编号</td>
    		<td>发布人</td>
    		<td>发布内容</td>
    		<td>发布时间</td>
    	</tr>
    	@foreach ($info as $item)
    	<tr align="center">
			<td>{{$item->id}}</td>
			<td>{{$item->user_phone}}</td>
			<td>{{$item->contents}}</td>
			<td>{{$item->add_time}}</td>
		</tr>
		@endforeach
    </table>
    {{ $info->links() }}
@endsection