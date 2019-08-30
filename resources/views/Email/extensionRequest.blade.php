@extends('Email.layout.index')

@section('content')
	<tr>
		<td class="content-block">
			<h3>Xin chào Minhh</h3>
		</td>
	</tr>
	<tr>
		<td class="content-block">
			Bạn đã đăng ký thành công gói gia hạn dịch vụ chữ ký số (x) năm.  
		</td>
    </tr>
    <tr>
        <td class="content-block">
            <b>Thông tin chứng thư: </b> <br>
            - Tên cá nhân/tổ chức:  (Lấy từ chứng thư) <br>
            - Số CMND/CCCD/MST/Passport:  (Lấy từ chứng thư) <br>
            - Thời hạn của chứng thư:  (Lấy từ chứng thư) <br>
        </td>
    </tr>
    <tr>
		<td class="content-block">
			<b>Thông tin hợp đồng:</b> <br>
            - Thời hạn của hợp đồng trước khi gia hạn: <br>
            - Thời hạn của hợp đồng sau khi gia hạn: <br>
		</td>
    </tr>
    <tr>
        <td class="content-block">
            <span style="text-decoration: underline;">Ghi chú:</span> <br>
            Thời hạn của chứng thư số thực tế có thể ngắn hơn trên hợp đồng bởi các lý do sau: <br>
            1. Do thời hạn trên chứng thư số gốc của nhà cung cấp dịch vụ: hệ thống sẽ tự động cấp bù thời gian cho khách hàng khi chứng thư số gốc được gia hạn.  <br>
            2. Do thời hạn của các giấy tờ cá nhân/tổ chức: hệ thống sẽ yêu cầu khách hàng bổ sung giấy tờ mới trước ngày hết hiệu lực của chứng thư. Nếu khách hàng không nộp bổ sung giấy tờ này, chứng thư số sẽ không được gia hạn và bị thu hồi.<br>
            Vui lòng liên lạc tổng đài hỗ trợ để biết thêm thông tin.
        </td>
    </tr>
	<tr>
		<td class="content-block">
			Cảm ơn bạn đã sử dụng dịch vụ,
		</td>
	</tr>
	<tr>
		<td class="content-block" style="padding-bottom:5px">
			<b>Dịch vụ Chứng thực Chữ ký số Công cộng MobiCA</b>
		</td>
    </tr>
    <tr>
		<td class="content-block-small" style="font-style: italic;">
                <b>Điện thoại hỗ trợ:</b> 0896.155.155  
                <b>Email:</b> support.cntt@mobifone.vn   
                <b>Website:</b> mobifone.vn 
		</td>
	</tr>
@endsection