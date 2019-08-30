@extends('Email.layout.index')

@section('content')
	<tr>
		<td class="content-block">
			<h3>Xin chào Minhh</h3>
		</td>
	</tr>
	<tr>
		<td class="content-block">
			Yêu cầu đặt lại mật khẩu của bạn đã thành công. 
		</td>
    </tr>
    <tr>
		<td class="content-block">
			Mật khẩu tạm thời của bạn là: ……….
		</td>
    </tr>
    <tr>
		<td class="content-block">
			Vui lòng truy cập để thay đổi mật khẩu và tiếp tục sử dụng dịch vụ.
		</td>
	</tr>
	<tr>
		<td class="content-block aligncenter">
			<a href="#" class="btn-primary" itemprop="url">Login</a>
		</td>
	</tr>
	<tr>
		<td class="content-block">
			Trân trọng,
		</td>
	</tr>
	<tr>
		<td class="content-block">
			<b>Dịch vụ Chứng thực Chữ ký số Công cộng MobiCA</b>
		</td>
	</tr>
@endsection