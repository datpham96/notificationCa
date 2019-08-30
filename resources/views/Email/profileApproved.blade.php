@extends('Email.layout.index')

@section('content')
<tr>
	<td class="content-block">
		<h3>[Dịch vụ MobiCA] - Thông báo hồ sơ đã được phê duyệt  </h3>
	</td>
</tr>
<tr>
	<td class="content-block">
		<h4>Xin chào (tên người dùng/ khách hàng)</h4>
		<p>Giao dịch (Transaction ID) đã được phê duyệt. </p>
		<p>Thông tin khách hàng: </p>
		<p>- Tên khách hàng: </p>
		<p>- CMND/CCCD/Passport/MST</p>
		<p>- Email:</p>
		<p>- Số điện thoại: </p>
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