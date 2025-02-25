@push('styles')
  <link rel="stylesheet" href="{{ asset('./css/admin/date_schedule/index.css') }}">
@endpush

<body>
  @extends('layouts.layouts')
  @section('content')
    <section class="content">
      <div class="wrapper">
        <h2 class="wrapper-title">日付一覧</h2>
        <div class="card-container">
          @foreach ($dateSchedules as $dateSchedule)
            <div class="card">
              <a href="{{ route('admin.time_schedules.index', ['date_schedule_id' => $dateSchedule->id]) }}">
                <img class="image" src="{{ asset('./../storage/img/theaterPoster.png') }}">
                <div class="card-title">{{ $dateSchedule->formatted_date }}</div>
              </a>
            </div>
          @endforeach
        </div>
        <button class="back-button" type="button" onClick="history.back();">戻る</button>
      </div>

    </section>
  @endsection

