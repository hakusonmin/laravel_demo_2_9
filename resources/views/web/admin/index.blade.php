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
  @extends('layouts.layouts')
  @section('content')
  <section class="content">
    <div class="wrapper">
      <h2 class="wrapper-title">管理者ルートページ</h2>
      <div class="card-container">
  
        <div class="card">
          <a href="{{ route('admin.movies.index') }}">
            <img class="image" src="{{ asset('./../storage/img/theaterPoster.png' )}}">
            <div class="card-title">「映画一覧」</div>
          </a>
        </div>
  
        <div class="card">
          <a href="{{ route('admin.halls.index') }}">
            <img class="image" src="{{ asset('./../storage/img/theaterPoster.png' )}}">
            <div class="card-title">「ホール一覧」</div>
          </a>
        </div>
  
        <div class="card">
          <a href="{{ route('admin.halls.index') }}">
            <img class="image" src="{{ asset('./../storage/img/theaterPoster.png' )}}">
            <div class="card-title">「ユーザー一覧」</div>
          </a>
        </div>
  
        <div class="card">
          <a href="{{ route('admin.halls.index') }}">
            <img class="image" src="{{ asset('./../storage/img/theaterPoster.png' )}}">
            <div class="card-title">「予約一覧」</div>
          </a>
        </div>
  
      </div>
    </div>
  </section>
  @endsection
</body>
</html>