@extends('Email.layout.index')

@section('content')
<tr>
	<td class="content-block">
		<h3>[Dịch vụ MobiCA] - Thông báo sắp hết hạn dịch vụ </h3>
	</td>
</tr>
<tr>
	<td class="content-block">
		<h4>Xin chào (tên người dùng)</h4>
		<p>Gói dịch vụ của khách hàng:</p>
		<p>- Tên khách hàng: </p>
		<p>- Email:</p>
		<p>- Số điện thoại: </p>
		<p>Sẽ hết hạn sử dụng sau: HH:MM DD/MM/YYYY</p>
		<p>Khách hàng cần gia hạn để tiếp tục sử dụng dịch vụ</p>
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