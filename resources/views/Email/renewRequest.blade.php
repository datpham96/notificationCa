@extends('Email.layout.index')

@section('content')
<tr>
    <td class="content-block">
        <h3>Thông báo cấp mới chứng thư số thành công</h3>
    </td>
</tr>
<tr>
    <td class="content-block">
        <h4>Xin chào (tên người dùng/ khách hàng)</h4>
        <p> Bạn đã đăng ký thành công gói dịch vụ chữ ký số (x) năm.
        </p>
    </td>

</tr>
<tr>
    <td class="content-block">
        <h4>Thông tin chứng thư:</h4>
        <p>- Tên cá nhân/tổ chức:  (Lấy từ chứng thư)</p>
        <p>- Số CMND/CCCD/MST/Passport:  (Lấy từ chứng thư)</p>
        <p>- Thời hạn của chứng thư:  (Lấy từ chứng thư)</p>
    </td>
</tr>
<tr>
    <td class="content-block">
       <h4>Thông tin hợp đồng:</h4>
       <p>- Thời hạn của hợp đồng trước khi gia hạn: </p>
       <p>- Thời hạn của hợp đồng sau khi gia hạn: </p>
   </td>
</tr>
<tr>
    <td class="content-block">
        <div>
            <h4>Dịch vụ Chứng thực Chữ ký số Công cộng MobiCA</h4>
            <p> <b>Điện thoại hỗ trợ:</b> 0896.155.155  <b>Email:</b>support.cntt@mobifone.vn   <b>Website:</b> mobifone.vn </p>
        </div>
    </td>
</tr>

@endsection