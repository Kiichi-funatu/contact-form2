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
<h2 class="admin-title">Admin</h2>
<form action="/admin" method="get">
@csrf
    <input type="text" name="keyword" placeholder="名前やメールアドレスを入力してください" class="search-input">
    <select name="gender" class="search-select">
        <option value="">性別</option>
        <option value="1">男性</option>
        <option value="2">女性</option>
        <option value="3">その他</option>
    </select>
    <select name="category_id" class="search-select">
        <option value="">お問い合わせの種類</option>
        @foreach($categories as $category)
        <option value="{{$category->id}}" @if(request('category_id') == $category->id) selected @endif>{{$category->content}}</option>
        @endforeach
    </select>

    <input type="date" name="date" value="{{ request('date') }}" class="search-date">
    <button type="submit" class="search-btn">検索</button>
    <a href="/admin" class="reset-btn">リセット</a>
    <a href="{{ route('admin.export', request()->query()) }}" class="export-btn">エクスポート</a>
    <div class="pagination-wrapper">
        {{ $contacts->appends(request()->query())->links('vendor.pagination.custom') }}
    </div>
    
</form>
<table class="admin-table">
    <tr>
        <th>お名前</th>
        <th>性別</th>
        <th>メールアドレス</th>
        <th>お問い合わせの種類</th>
        <th></th>
    </tr>
    @foreach($contacts as $contact)
    <tr>
        <td>{{ $contact->first_name }} {{ $contact->last_name }}</td>
        <td>@if($contact->gender == 1)
            男性
            @elseif($contact->gender == 2)
            女性
            @else($contact->gender == 3)
            その他
            @endif
        </td>
        <td>{{ $contact->email }}</td>
        <td>{{ $contact->category->content }}</td>
        <td>
           <a href="#modal-{{ $contact->id }}" class="detail-link">詳細</a>
        </td>
    </tr>
    
    <!-- モーダル -->
    <div id="modal-{{ $contact->id }}" class="modal">
        <div class="modal-content">
            
            <a href="#" class="modal-close">×</a>

            <h3 class="modal-title">お問い合わせ詳細</h3>

            <p class="modal-row"><strong>お名前：</strong>{{ $contact->first_name }} {{ $contact->last_name }}</p>
            <p class="modal-row"><strong>性別：</strong>
                @if($contact->gender == 1)
            男性
                @elseif($contact->gender == 2)
            女性
                @else($contact->gender == 3)
            その他
                @endif
            </p>
            <p class="modal-row"><strong>メール：</strong>{{ $contact->email }}</p>
            <p class="modal-row"><strong>種類：</strong>{{ $contact->category->content }}</p>
            <p class="modal-row"><strong>内容：</strong>{{ $contact->detail }}</p>
            
            <!-- 削除フォーム -->
            <form action="/delete" method="post" class="delete-form">
            @csrf
            @method('DELETE')
            <input type="hidden" name="id" value="{{ $contact->id }}">
            <button type="submit" class="delete-btn">削除</button>    
            </form>
        </div>
    </div>

    @endforeach
</table>
@endsection