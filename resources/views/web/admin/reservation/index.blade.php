@push('styles')
  <link rel="stylesheet" href="{{ asset('/css/admin/reservation/index.css') }}">
@endpush


@extends('layouts.layouts')
@section('content')
  <section class="content">
    <div class="wrapper">
      <h2 class="wrapper-title">予約</h2>
      <div class="card-container">
        @foreach ($reservations as $reservation)
          <div class="card">
            <a href="{{ route('admin.reservations.show', ['reservation' => $reservation->id]) }}">
              <img class="image" src="{{ asset('./../storage/img/theaterPoster.png') }}">
              <div class="card-title">{{ $reservation->ticket->timeSchedule->dateSchedule->movie->title }}</div>
            </a>
          </div>
          @endforeach
        </div>
    </div>
  </section>
@endsection
