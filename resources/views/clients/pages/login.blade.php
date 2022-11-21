@extends('layout.master')

@section('title')
    Đăng nhập
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
@endsection


@section('content')
    <div class="grid wide login-container">
        <div class="login">
            <h1>Đăng nhập</h1>
            <form class="form" action="">
                <p>Email</p>
                <input type="text" name="email">
                <div class="pass-forgot">
                    <p>Mật khẩu</p>
                    <a href="">Quên mật khẩu?</a>

                </div>
                <input type="password" name="password">

                <input class="login-btn" type="submit" name="login" value="Đăng nhập">

                <a class="create-acc" href="{{ route('signup') }}">Tạo tài khoản <i class="fa-solid fa-arrow-right"></i></a>
            </form>
        </div>
    </div>
@endsection

@section('js')

@endsection
