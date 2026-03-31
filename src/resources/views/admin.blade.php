@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('link')
<form method="POST" action="/logout">
    @csrf
    <button class="header__link">ログアウト</button>
</form>
@endsection

@section('content')
<h2>Admin</h2>

@endsection