<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie</title>
    <link rel="stylesheet" href="{{ asset('./css/list.css') }}">
</head>
<body>
  <div class="wrapper">
    <h2 class="wrapper-title">映画一覧</h2>
    <div class="card-container">
        @foreach ($movies as $movie)
            <div class="card">
                <img class="image" src="{{ asset('./../storage/img/' . $movie->image_url )}}">
                <div class="card-title">{{ $movie->title }}</div>
                <button>詳細を確認</button>
            </div>
        @endforeach
    </div>
  </div>

    @if (session('message'))
      <div class="alert alert-danger">
          {{ session('message') }}
      </div>
    @endif
</body>
</html>