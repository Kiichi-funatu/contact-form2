@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm-form__inner">

    <h2 class="form-title">確認画面</h2>

    <table class="confirm-form__table">

        <tr class="confirm-form__row">
            <th class="confirm-form__label">お名前</th>
            <td class="confirm-form__data">{{ $inputs['first_name'] }} {{ $inputs['last_name'] }}</td>
        </tr>

        <tr class="confirm-form__row">
            <th class="confirm-form__label">性別</th>
            <td class="confirm-form__data">
                @if($inputs['gender'] == 1)男性
                @elseif($inputs['gender'] == 2)女性
                @else($inputs['gender'] == 3)その他
                @endif
            </td>
        </tr>

        <tr class="confirm-form__row">
            <th class="confirm-form__label">メール</th>
            <td class="confirm-form__data">{{ $inputs['email'] }}</td>
        </tr>

        <tr class="confirm-form__row">
            <th class="confirm-form__label">電話番号</th>
            <td class="confirm-form__data">{{ $inputs['tell'] }}</td>
        </tr>

        <tr class="confirm-form__row">
            <th class="confirm-form__label">住所</th>
            <td class="confirm-form__data">{{ $inputs['address'] }}</td>
        </tr>

        <tr class="confirm-form__row">
            <th class="confirm-form__label">建物名</th>
            <td class="confirm-form__data">{{ $inputs['building'] }}</td>
        </tr>

        <tr class="confirm-form__row">
            <th class="confirm-form__label">種類</th>
            <td class="confirm-form__data">
                @if($inputs['category_id'] == 1)商品のお届けについて
                @elseif($inputs['category_id'] == 2)商品の交換について
                @elseif($inputs['category_id'] == 3)商品トラブル
                @elseif($inputs['category_id'] == 4)ショップへのお問い合わせ
                @elseif($inputs['category_id'] == 5)その他
                @endif
            </td>
        </tr>

        <tr class="confirm-form__row">
            <th class="confirm-form__label">内容</th>
            <td class="confirm-form__data">{{ $inputs['detail'] }}</td>
        </tr>

    </table>

    <div class="confirm-form__btn-inner">

        <form action="/store" method="post">
            @csrf
            @foreach($inputs as $key => $value)
                <input type="hidden" name="{{ $key }}" value="{{ $value }}">
            @endforeach
            <button class="btn" type="submit">送信</button>
        </form>

        <form action="/" method="get">
            <button class="confirm-form__back-btn" name="back" value="back">戻る</button>
        </form>

    </div>

</div>
@endsection