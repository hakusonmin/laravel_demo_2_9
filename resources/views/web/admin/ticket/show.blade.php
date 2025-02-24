<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Movie</title>
  <link rel="stylesheet" href="{{ asset('./css/admin/movie/show.css') }}">
</head>

<body>
  @extends('layouts.layouts')
  @section('content')
    <section class="content">
      <section class="my-wrapper">
        <div class="wrapper">
          <h2 class="wrapper-title">映画情報詳細</h2>
          <div class="form-element-wrapper">
            <div class="form-element-wrapper-title">映画タイトル</div>
            <div class="form-element-wrapper-content">{{ $ticket->timeSchedule->dateSchedule->movie->title }}</div>
          </div>

          <div class="form-element-wrapper">
            <div class="form-element-wrapper-title"><label for="image_url">画像URL</label></div>
            <div class="form-element-wrapper-content">{{ $ticket->timeSchedule->dateSchedule->movie->image_url }}</div>
          </div>

          <div class="form-element-wrapper">
            <div class="form-element-wrapper-title"><label for="published_date">公開日</label></div>
            <div class="form-element-wrapper-content">{{ $ticket->timeSchedule->dateSchedule->movie->formattedPublishedDate }}</div>
          </div>

          <div class="form-element-wrapper">
            <div class="form-element-wrapper-title"><label for="description">概要</label></div>
            <div class="form-element-wrapper-content">{{ $ticket->timeSchedule->dateSchedule->movie->description }}</div>
          </div>

          <div class="form-element-wrapper">
            <div class="form-element-wrapper-title"><label for="description">日付</label></div>
            <div class="form-element-wrapper-content">{{ $ticket->timeSchedule->dateSchedule->formattedDate }}</div>
          </div>

          <div class="form-element-wrapper">
            <div class="form-element-wrapper-title"><label for="description">公演開始時間</label></div>
            <div class="form-element-wrapper-content">{{ $ticket->timeSchedule->formattedStartTime }}</div>
          </div>

          <div class="form-element-wrapper">
            <div class="form-element-wrapper-title"><label for="description">講演終了時間</label></div>
            <div class="form-element-wrapper-content">{{ $ticket->timeSchedule->formattedEndTime }}</div>
          </div>

          <div class="form-element-wrapper">
            <div class="form-element-wrapper-title"><label for="description">ホール</label></div>
            <div class="form-element-wrapper-content">{{ $ticket->sheet->hall->title }}</div>
          </div>

          <div class="form-element-wrapper">
            <div class="form-element-wrapper-title"><label for="description">席</label></div>
            <div class="form-element-wrapper-content">{{ $ticket->sheet->title }}</div>
          </div>

          <div class="form-element-wrapper">
            <div class="form-element-wrapper-title"><label for="description">料金</label></div>
            <div class="form-element-wrapper-content">{{ $ticket->price }}円</div>
          </div>

          <div>以上の内容のチケットを購入を確定しますか？</div>

          <button class="jump-button" type="button" onclick="location.href='{{ route('admin.date_schedules.index', ['ticket_id' => $ticket->id]) }}'">確定する</button>
          <button class="back-button" type="button" onClick="history.back();">戻る</button>

          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
        </div>
      </section>
    </section>
  @endsection
</body>
