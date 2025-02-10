<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie</title>
    <link rel="stylesheet" href="{{ asset('./css/admin/movie/index.css') }}">
</head>
<body>
    <table border="1">
      <thead>
      <tr>
        <th>映画タイトル</th>
        <th>画像URL</th>
        <th>公開日</th>
        <th>概要</th>
        <th>上映中かどうか</th>
      </tr>
      </thead>
      <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <th>{{ $movie->title }}</th>
                    <td>{{ $movie->image_url }} </td>
                    <td>{{ $movie->published_date }}</td>
                    <td>{{ $movie->description }}</td>
                    <td>{{ $movie->is_showing ? '上映中' : '上映予定' }}</td>
                </tr>
            @endforeach
      </tbody>
    </table>

    @if (session('message'))
      <div class="alert alert-danger">
          {{ session('message') }}
      </div>
    @endif
</body>
</html>