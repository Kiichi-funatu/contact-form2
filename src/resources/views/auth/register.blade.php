@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('link')
<a class="header_link" href="/login">login</a>
@endsection

@section('content')
<h3 class="register_title">Register</h3>

<div class="register_container">
    <form method="POST" action="/register">
        @csrf

        <div class="register-name">
            <p class="register_form-name_title">お名前</p>
            <input class="register_form-text" type="text" name="name" value="{{ old('name') }}" required>
            @error('name')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <p class="register_form-name_title">メールアドレス</p>
            <input class="register_form-text" type="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <p class="register_form-name_title">パスワード</p>
            <input class="register_form-text" type="password" name="password" required>
            @error('password')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <p class="register_form-name_title">確認パスワード</p>
            <input class="register_form-text" type="password" name="password_confirmation" required>
            @error('password_confirmation')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <button class="button" type="submit">登録</button>
    </form>
</div>
@endsection