@push('styles')
  <link rel="stylesheet" href="{{ asset('./css/admin/movie/index.css') }}">
@endpush

@extends('layouts.layouts')
@section('content')
  <section class="content">
    <div class="wrapper">
      <h2 class="wrapper-title">席一覧</h2>
      <div class="card-container">
        @foreach ($sheets as $sheet)
          <div class="card">
            <img class="image" src="{{ asset('./../storage/img/theaterPoster.png') }}">
            <div class="card-title">{{ $sheet->title }}</div>
          </div>
        @endforeach
      </div>
      <button class="back-button" type="button" onclick="location.href='{{ route('admin.halls.index') }}'">戻る</button>
    </div>
  </section>
@endsection
