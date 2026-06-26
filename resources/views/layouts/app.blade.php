<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cytech EC</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="border-bottom py-3 mb-4">
        <div class="container d-flex justify-content-between align-items-center">
            <h2>Cytech EC</h2>

            <nav class="d-flex align-items-center gap-3">
                <a href="/" class="text-decoration-none text-primary">Home</a>
                <a href="#" class="text-decoration-none text-primary">マイページ</a>
                <span>ログインユーザー：TTUU</span>
                 <button type="submit" class="btn btn-danger btn-sm">ログアウト</button>

            </nav>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer class="border-top text-center py-4 mt-5">
        <a href="#" class="btn btn-primary btn-sm mb-2">お問い合わせ</a>
        <div>
            <a href="/" class="me-2 text-primary">Home</a>
            <a href="#" class=text-primary>マイページ</a>
        </div>
        <p class="mt-3 mb-0">&copy; 2024 Company, Inc</p>
    </footer>
</body>
</html>
