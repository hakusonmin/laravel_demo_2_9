@push('styles')
  <link rel="stylesheet" href="{{ asset('./css/admin/date_schedule/index.css') }}">
@endpush

@extends('layouts.layouts')
@section('content')
  <section class="content">
    <div class="wrapper">
      <h2 class="wrapper-title">時間一覧</h2>
      <div class="card-container">
        @foreach ($timeSchedules as $timeSchedule)
          <div class="card">
            <a href="{{ route('admin.tickets.index', ['time_schedule_id' => $timeSchedule->id]) }}">
              <img class="image" src="{{ asset('./../storage/img/theaterPoster.png') }}">
              <div class="card-title">{{ $timeSchedule->formatted_start_time }} ~{{ $timeSchedule->formatted_end_time }}</div>
            </a>
          </div>
        @endforeach
      </div>
      <button class="back-button" type="button" onClick="history.back();">戻る</button>
    </div>
  </section>
@endsection
