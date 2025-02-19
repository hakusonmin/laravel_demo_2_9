<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('./css/admin/index.css') }}">
</head>
<body>
  <div class="wrapper">
    <h2 class="wrapper-title">「管理者ルートページ」</h2>
    <div class="card-container">

      <div class="card">
        <img class="image" src="{{ asset('./../storage/img/theater.jpg' )}}">
        <div class="card-title">「映画一覧」</div>
        <button class="back-button" type="button" onclick="location.href='{{ route('admin.movies.index') }}'">一覧へ</button>
      </div>

      <div class="card">
        <img class="image" src="{{ asset('./../storage/img/theater.jpg' )}}">
        <div class="card-title">「ホール一覧」</div>
        <button class="back-button" type="button" onclick="location.href='{{ route('admin.halls.index') }}'">一覧へ</button>
      </div>

      <div class="card">
        <img class="image" src="{{ asset('./../storage/img/' )}}">
        <div class="card-title">「ユーザー一覧」</div>
        <button class="back-button" type="button" onclick="location.href='{{ route('admin.halls.index') }}'">一覧へ</button>
      </div>

      <div class="card">
        <img class="image" src="{{ asset('./../storage/img/' )}}">
        <div class="card-title">「予約一覧」</div>
        <button class="back-button" type="button" onclick="location.href='{{ route('admin.halls.index') }}'">一覧へ</button>
      </div>

    </div>
  </div>
</body>
</html>