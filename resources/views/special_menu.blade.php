<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BACK MENU</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="menu-container">
        <h1>BACK MENU</h1>
        <form action="{{ route('goto.main') }}" method="POST">
            @csrf
            <button type="submit">GoToMain</button>
        </form>
        <form action="{{ route('logout') }}" method="POST" style="margin-top: 10px;">
            @csrf
            <button type="submit">ログアウト</button>
        </form>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
