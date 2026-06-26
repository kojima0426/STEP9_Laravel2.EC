<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Cytech EC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
     <header class="border-bottom py-3 mb-4">
      <div class="container d-flex justify-content-between align-items-center">
      <h2>Cytech EC</h2>
      <nav class="d-flex align-items-center gap-3" >
        <a href="/" class="text-decoration-none">Home</a>
        <a href="#" class="text-decoration-none">マイページ</a>
        <span>ログインユーザー:TTUU</span>
        <button class="btn btn-danger btn-sm">ログアウト</button>
      </nav>
      </div>
    </header>


    <main>
    @yield('content')
    </main>

     <footer class="border-top mt-5 py-4">
      <div class="container text-center">
        <a href="#" class="btn btn-primary mb-3">お問い合わせ</a>
        <br>
        <a href="/">Home</a>
        <a href="#">マイページ</a>
        <p>© 2024 Company, Inc</p>
      </div>
    </footer>
</body>
</html>
