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
        @foreach ($sheets as $sheet)
            <div class="card">
                <img class="image" src="{{ asset('./../storage/img/theater.jpg' )}}">
                <div class="card-title">{{ $hall->title }}</div>
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