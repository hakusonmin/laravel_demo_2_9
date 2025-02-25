@push('styles')
  <link rel="stylesheet" href="{{ asset('./css/admin/date_schedule/index.css') }}">
@endpush

@extends('layouts.layouts')
@section('content')
  <section class="content">
    <div class="wrapper">
      <h2 class="wrapper-title">席一覧</h2>
      <div class="card-container">
        @foreach ($tickets as $ticket)
          <div class="card">
            <a href="{{ route('admin.tickets.show', ['ticket' => $ticket->id]) }}">
              <img class="image" src="{{ asset('./../storage/img/theaterPoster.png') }}">
              <div class="card-title">{{ $ticket->sheet->hall->title }}ホールの{{ $ticket->sheet->title }}席</div>
            </a>
          </div>
        @endforeach
      </div>
      <button class="back-button" type="button" onClick="history.back();">戻る</button>
    </div>
  </section>
@endsection
