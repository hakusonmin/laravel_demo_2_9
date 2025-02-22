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
    @extends('layouts.layouts')
    @section('content')
      <section class="content">
        <div class="wrapper">
          <h2 class="wrapper-title">席一覧</h2>
          <div class="card-container">
              @foreach ($dateSchedules as $dateSchedule)
                  <div class="card">
                      <img class="image" src="{{ asset('./../storage/img/theaterPoster.png' )}}">
                      <div class="card-title">「{{ $dateSchedule->title }}」</div>
                  </div>
              @endforeach
          </div>
          <button class="back-button" type="button" onclick="location.href='{{ route('admin.halls.index') }}'">戻る</button>
        </div>
      
        @if (session('message'))
          <div class="alert alert-danger">
              {{ session('message') }}
          </div>
        @endif
      </section>
    @endsection
  </body>
</html>