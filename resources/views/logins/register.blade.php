@extends('loginlayouts')
@section('title')
    Đăng Ký
@endsection
@section('Dang_ky')
<h2>Đăng Ký Ngay</h2>

<form action="{{route('admin.getregister')}}" method="post">
    @csrf
    <input type="text" class="ggg" name="name" placeholder="Nhập vào Tên của bạn" required="">
    <input type="email" class="ggg" name="email" placeholder="Nhập vào địa chỉ email của bạn" required="">
    <input type="text" class="ggg" name="phone" placeholder="Vui lòng để lại số điẹn thoại" required="">
    <input type="password" class="ggg" name="password" placeholder="Nhập vào mật khẩu của bạn" required="">
    <h4><input type="checkbox" />Tôi đồng ý với Điều Khoản dịch vụ và Chính sách bảo mật</h4>
    
        <div class="clearfix"></div>
        <input type="submit" value="Đăng Ký" name="register">
</form>
<p>Đã Đăng ký<a href="{{route('admin.login')}}">Đăng Nhập</a></p>
@endsection