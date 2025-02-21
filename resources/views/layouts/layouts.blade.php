
<head>
  <link rel="stylesheet" href="{{ asset('./css/layouts/layouts.css') }}">
</head>
<body>
  <header>
    <h1 class="site-title">
      <a href="{{ route('admin.index') }}'">映画館サイト</a> 
    </h1>
    <nav>
      <ul>
        <li><a href="{{ route('admin.index') }}">管理画面へ</a></li>
        <li><a href="{{ route('admin.movies.index') }}'">映画一覧</a></li>
        <li><a href="{{ route('admin.halls.index') }}'">ホール一覧</a></li>           
      </ul>
    </nav>
  </header>
    @yield('content')
  <footer>

  </footer>>
</body>