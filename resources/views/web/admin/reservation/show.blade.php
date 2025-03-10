@push('styles')
  <link rel="stylesheet" href="{{ asset('./css/admin/movie/show.css') }}">
@endpush

@extends('layouts.layouts')
@section('content')
  <section class="content">
    <section class="my-wrapper">
      <div class="wrapper">
        <h2 class="wrapper-title">映画情報詳細</h2>
        <div class="form-element-wrapper">
          <div class="form-element-wrapper-title">映画タイトル</div>
          <div class="form-element-wrapper-content">{{ $reservation->ticket->timeSchedule->dateSchedule->movie->title }}</div>
        </div>

        <div class="form-element-wrapper">
          <div class="form-element-wrapper-title"><label for="image_url">画像URL</label></div>
          <div class="form-element-wrapper-content">{{ $reservation->ticket->timeSchedule->dateSchedule->movie->image_url }}</div>
        </div>

        <div class="form-element-wrapper">
          <div class="form-element-wrapper-title"><label for="published_date">公開日</label></div>
          <div class="form-element-wrapper-content">{{ $reservation->ticket->timeSchedule->dateSchedule->movie->formatted_published_date }}</div>
        </div>

        <div class="form-element-wrapper">
          <div class="form-element-wrapper-title"><label for="description">概要</label></div>
          <div class="form-element-wrapper-content">{{ $reservation->ticket->timeSchedule->dateSchedule->movie->description }}</div>
        </div>

        <div class="form-element-wrapper">
          <div class="form-element-wrapper-title"><label for="description">日付</label></div>
          <div class="form-element-wrapper-content">{{ $reservation->ticket->timeSchedule->dateSchedule->formatted_date }}</div>
        </div>

        <div class="form-element-wrapper">
          <div class="form-element-wrapper-title"><label for="description">公演開始時間</label></div>
          <div class="form-element-wrapper-content">{{ $reservation->ticket->timeSchedule->formatted_start_time }}</div>
        </div>

        <div class="form-element-wrapper">
          <div class="form-element-wrapper-title"><label for="description">講演終了時間</label></div>
          <div class="form-element-wrapper-content">{{ $reservation->ticket->timeSchedule->formatted_end_time }}</div>
        </div>

        <div class="form-element-wrapper">
          <div class="form-element-wrapper-title"><label for="description">ホール</label></div>
          <div class="form-element-wrapper-content">{{ $reservation->ticket->sheet->hall->title }}</div>
        </div>

        <div class="form-element-wrapper">
          <div class="form-element-wrapper-title"><label for="description">席</label></div>
          <div class="form-element-wrapper-content">{{ $reservation->ticket->sheet->title }}</div>
        </div>

        <div class="form-element-wrapper">
          <div class="form-element-wrapper-title"><label for="description">料金</label></div>
          <div class="form-element-wrapper-content">{{ $reservation->ticket->price }}円</div>
        </div>

        <button class="back-button" type="button" onClick="history.back();">戻る</button>
      </div>
    </section>
  </section>
@endsection
