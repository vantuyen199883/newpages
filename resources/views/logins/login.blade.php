@extends('loginlayouts')
@section('title')
    Đăng Nhập
@endsection
@section('Dang_nhap')
    <h2>Đăng Nhập</h2>
    <form action="{{route('admin.getlogin')}}" method="post">
        @csrf
        <input type="email" class="ggg" name="email" placeholder="Nhập vào Email của bạn" required="">
        <input type="password" class="ggg" name="password" placeholder="Nhập vào Password của bạn" required="">
        <span><input type="checkbox" /> Lưu Mật Khẩu</span>
            <div class="clearfix"></div>
            <input type="submit" value="Đăng Nhập" name="Đăng Ký">
            
    </form>
    <p style="color: red">
        @php
            $name = Session::get('messenger');
            if($name)
            {
              echo $name;
              Session::put('messenger',null);
            }
        @endphp
    </p>
    <p>Bạn chưa có tài khoản ?<a href="{{route('admin.register')}}">Đăng Ký</a></p>
@endsection
