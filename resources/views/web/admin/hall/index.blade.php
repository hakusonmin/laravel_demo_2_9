<!DOCTYPE html>
<html lang="ja">

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
              <a href="{{ route('admin.sheets.list_by_hall', ['id' => $hall->id]) }}">
                <img class="image" src="{{ asset('./../storage/img/theaterPoster.png') }}">
                <div class="card-title">{{ $hall->title }}</div>
              </a>
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
