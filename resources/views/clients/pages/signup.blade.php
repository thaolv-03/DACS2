@extends('layout.master')

@section('title')
    Đăng nhập
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/signup.css') }}">
@endsection


@section('content')
    <div class="grid wide signup-container">
        <div class="signup">
            <h1>Đăng ký tài khoản</h1>
            <form class="form" action="">
                <p>First name</p>
                <input type="text" name="fName">
                <p>Last name</p>
                <input type="text" name="lName">
                <p>Email</p>
                <input type="text" name="email">
                <p>Mật khẩu</p>
                <input type="password" name="password">

                <input class="signup-btn" type="submit" name="signup" value="Đăng ký">
                <a class="back-login" href="{{ route('login') }}">Quay lại đăng nhập <i class="fa-solid fa-arrow-right"></i></a>
            </form>
        </div>
    </div>
@endsection

@section('js')

@endsection
