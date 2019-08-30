@extends('Email.layout.index')

@section('content')
<tr>
	<td class="content-block">
		<h3>[Dịch vụ MobiCA] - Thông báo hồ sơ đã được phê duyệt </h3>
	</td>
</tr>
<tr>
	<td class="content-block">
		<h4>Xin chào (tên người dùng/ khách hàng)</h4>
		Giao dịch (Transaction ID) đã được phê duyệt.<br />
		Thông tin khách hàng:<br />
		- Tên khách hàng:<br />
		- CMND/CCCD/Passport/MST<br />
		- Email:<br />
		- Số điện thoại:
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