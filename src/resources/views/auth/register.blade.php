<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <h3 class="register_title">Register</h3>
        <div>
            <form method="POST" action="/register">
                @csrf
                <div class="register_container">
                    <div class="register-name">
                        <p class="register_form-name_title">お名前</p>
                        <input class="register_form-text" type="text" name="name" value="{{ old('name') }}" required>
                    </div> 
                    <div>
                        <p class="register_form-name_title" >メールアドレス</p>
                        <input class="register_form-text" type="email" name="email" placeholder="メール" required>
                    </div> 
                    <div>
                        <p class="register_form-name_title">パスワード</p>
                        <input class="register_form-text" type="password" name="password" placeholder="パスワード" required>
                    </div> 
                    <div>       
                        <p class="register_form-name_title">確認パスワード</p>
                        <input class="register_form-text" type="password" name="password_confirmation" placeholder="確認用パスワード" required>
                   </div>
                    <div>
                        <button class="button" type="submit">登録</button>
                    </div>
                </div>     
            </form>
        </div>
    </div>
    

</body>
</html>

