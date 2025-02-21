<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie</title>
    <link rel="stylesheet" href="{{ asset('./css/admin/sheet/list-by-hall.css') }}">
</head>
<body>
  <div class="wrapper">
    <h2 class="wrapper-title">チケット一覧</h2>
    <div class="card-container">
        @foreach ($movieSheets as $movieSheet)
            <div class="card">
                <img class="image" src="{{ asset('./../storage/img/theater.jpg' )}}">
                <div class="card-title">「{{ $movieSheet->price }}」</div>
            </div>
        @endforeach
    </div>
    <button class="back-button" type="button" onclick="location.href='{{ route('admin.movies.show', ['movie'=> $movieSheet->movie_id]  ) }}'">戻る</button>
  </div>

    @if (session('message'))
      <div class="alert alert-danger">
          {{ session('message') }}
      </div>
    @endif
</body>
</html>