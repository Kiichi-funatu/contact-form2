@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<div class="card-container">

    <h2 class="form-title">お問い合わせ</h2>

    <form action="/confirm" method="post">
        @csrf

        {{-- お名前 --}}
        <div class="form-group">
            <label class="form-label">お名前</label>
            <div class="name-row">
                <input class="form-input" type="text" name="first_name" placeholder="姓" value="{{ old('first_name') }}">
                <input class="form-input" type="text" name="last_name" placeholder="名" value="{{ old('last_name') }}">
            </div>
            @error('first_name') <p class="error-text">{{ $message }}</p> @enderror
            @error('last_name') <p class="error-text">{{ $message }}</p> @enderror
        </div>

        {{-- 性別 --}}
        <div class="form-group">
            <label class="form-label">性別</label>
            <div class="radio-group">
                <label><input type="radio" name="gender" value="1" {{ old('gender', 1)==1?'checked':'' }}> 男性</label>
                <label><input type="radio" name="gender" value="2" {{ old('gender')==2?'checked':'' }}> 女性</label>
                <label><input type="radio" name="gender" value="3" {{ old('gender')==3?'checked':'' }}> その他</label>
            </div>
            @error('gender') <p class="error-text">{{ $message }}</p> @enderror
        </div>

        {{-- メール --}}
        <div class="form-group">
            <label class="form-label">メールアドレス</label>
            <input class="form-input" type="email" name="email" value="{{ old('email') }}">
            @error('email') <p class="error-text">{{ $message }}</p> @enderror
        </div>

        {{-- 電話番号 --}}
        <div class="form-group">
            <label class="form-label">電話番号</label>
            <input class="form-input" type="text" name="tell" value="{{ old('tell') }}">
            @error('tell') <p class="error-text">{{ $message }}</p> @enderror
        </div>

        {{-- 住所 --}}
        <div class="form-group">
            <label class="form-label">住所</label>
            <input class="form-input" type="text" name="address" value="{{ old('address') }}">
            @error('address') <p class="error-text">{{ $message }}</p> @enderror
        </div>

        {{-- 建物名 --}}
        <div class="form-group">
            <label class="form-label">建物名</label>
            <input class="form-input" type="text" name="building" value="{{ old('building') }}">
            @error('building') <p class="error-text">{{ $message }}</p> @enderror
        </div>

        {{-- 種類 --}}
        <div class="form-group">
            <label class="form-label">お問い合わせの種類</label>
            <select class="form-select" name="category_id">
                <option disabled selected>選択してください</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id')==$category->id?'selected':'' }}>
                        {{ $category->content }}
                    </option>
                @endforeach
            </select>
            @error('category_id') <p class="error-text">{{ $message }}</p> @enderror
        </div>

        {{-- 内容 --}}
        <div class="form-group">
            <label class="form-label">お問い合わせ内容</label>
            <textarea class="form-textarea" name="detail">{{ old('detail') }}</textarea>
            @error('detail') <p class="error-text">{{ $message }}</p> @enderror
        </div>

        <button class="btn" type="submit">確認画面へ</button>

    </form>
</div>
@endsection