<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Movie</title>
      <link rel="stylesheet" href="{{ asset('./css/admin/hall/index.css') }}">
  </head>
  <body>
    @extends('layouts.layouts')
    @section('content')
      <section class="content">
        <div class="wrapper">
          <h2 class="wrapper-title">ホール一覧</h2>
          <div class="card-container">
              @foreach ($halls as $hall)
                  <div class="card">
                      <img class="image" src="{{ asset('./../storage/img/theater.jpg' )}}">
                      <div class="card-title">「{{ $hall->title }}」</div>
                      <button type="button" onclick="location.href='{{ route('admin.sheets.list-by-hall', ['id'=> $hall->id]) }}'">席一覧へ</button>
                  </div>
              @endforeach
                </div>
          <button class="back-button" type="button" onclick="location.href='{{ route('admin.index') }}'">戻る</button>
        </div>
      </section>

      @if (session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
      @endif
  @endsection
  </body>
</html>