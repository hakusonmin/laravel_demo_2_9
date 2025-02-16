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
    <div class="card-container">
        @foreach ($movies as $movie)
            <div class="card">
                <h2 class="card-title">{{ $movie->title }}</h2>
                <img class="image" src="{{ asset('./../storage/img/' . $movie->image_url )}}">
                <button>詳細画面に行く</button>
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