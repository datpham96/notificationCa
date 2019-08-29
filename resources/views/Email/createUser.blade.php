@extends('Email.layout.index')

@section('content')
<tr>
	<td class="content-block">
		<h3>Tạo tài khoản</h3>
	</td>
</tr>
<tr>
	<td class="content-block">
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
	</td>
</tr>
<tr>
	<td class="content-block">
		Please confirm your email address by clicking the link below.
	</td>
</tr>
<tr>
	<td class="content-block">
		We may need to send you critical information about our service and it is important that we have an accurate email address.
	</td>
</tr>
<tr>
	<td class="content-block aligncenter" itemprop="handler" itemscope itemtype="http://schema.org/HttpActionHandler">
		<a href="#" class="btn-primary" itemprop="url">Confirm email address</a>
	</td>
</tr>
@endsection