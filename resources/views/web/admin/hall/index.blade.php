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
  <div class="wrapper">
    <h2 class="wrapper-title">ホール一覧</h2>
    <div class="card-container">
        @foreach ($halls as $hall)
            <div class="card">
                <img class="image" src="{{ asset('./../storage/img/theater.jpg' )}}">
                <div class="card-title">「{{ $hall->title }}」</div>
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