@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('link')
<a class="header__link" href="/register">register</a>
@endsection


@section('content')

<div class="login-form">
   <form method="POST" action="/login">
    @csrf
        <div class="login-form-email">
            <input type="email" name="email" placeholder="メール" required>
        </div>
        <div class="login-form-pass">
            <input type="password" name="password" placeholder="パスワード" required>
        </div>
        <div class="login-form-button">
            <button type="submit">ログイン</button>
        </div>
    </form>
</div>


@endsection










