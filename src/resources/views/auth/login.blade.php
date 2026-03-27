<form method="POST" action="/login">
    @csrf
    <input type="email" name="email" placeholder="メール" required>
    <input type="password" name="password" placeholder="パスワード" required>
    <button type="submit">ログイン</button>
</form>