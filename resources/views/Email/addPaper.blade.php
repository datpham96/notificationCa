@extends('Email.layout.index')

@section('content')
<tr>
	<td class="content-block">
		<h3>[Dịch vụ MobiCA] - Bổ sung giấy tờ </h3>
	</td>
</tr>
<tr>
	<td class="content-block">
		<h4>Xin chào (tên người dùng)</h4>
		<p>- Tên khách hàng: </p>
		<p>- Email:</p>
		<p>- Số điện thoại: </p>
		<p>Khách hàng cần bổ sung trước ngày DD/MM/YYYY để tiếp tục sử dụng dịch vụ. </p>
	</td>
</tr>
<tr>
	<td class="content-block aligncenter" itemprop="handler" itemscope itemtype="http://schema.org/HttpActionHandler">
		<a style="padding: 0 25px;" href="#" class="btn-primary" itemprop="url">Login</a>
	</td>
</tr>
<tr>
	<td class="content-block">
		<p>Trân trọng</p>
		<h4>Dịch vụ Chứng thực Chữ ký số Công cộng MobiCA</h4>
	</td>
</tr>
@endsection