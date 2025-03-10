<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>映画購入サイト</title>
  <link rel="stylesheet" href="{{ asset('./css/layouts/layouts.css') }}">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @stack('styles')
</head>

<body>
  <header>
    <h2 class="site-title">
      <a href="{{ route('admin.index') }}">映画館サイト</a>
    </h2>
    <nav>
      <ul>
        <li><a href="{{ route('admin.index') }}">管理画面へ</a></li>
        <li><a href="{{ route('admin.movies.index') }}'">映画一覧</a></li>
        <li><a href="{{ route('admin.halls.index') }}'">ホール一覧</a></li>
      </ul>
    </nav>
  </header>

  <div class="line"></div>

  @yield('content')

    @if ($errors->any())

      <div class="error">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    @if (session('message'))
      <div class="message">
        {{ session('message') }}
      </div>
    @endif

  <div class="line"></div>

  <footer>

  </footer>
</body>
