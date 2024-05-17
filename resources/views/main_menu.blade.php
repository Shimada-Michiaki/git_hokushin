<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メインMENU</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <main>
        <div class="container">
            <h1>メインMENU</h1>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">ログアウト</button>
            </form>
        </div>
    </main>
    @component('components.footer', ['copyrightText' => 'Copyright © 2024 RunFree. All rights reserved.'])
    @endcomponent
</body>
</html>
