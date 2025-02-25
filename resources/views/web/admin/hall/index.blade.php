@push('styles')
  <link rel="stylesheet" href="{{ asset('./css/admin/hall/index.css') }}">
@endpush

@extends('layouts.layouts')
@section('content')
  <section class="content">
    <div class="wrapper">
      <h2 class="wrapper-title">ホール一覧</h2>
      <div class="card-container">
        @foreach ($halls as $hall)
          <div class="card">
            <a href="{{ route('admin.sheets.index', ['hall_id' => $hall->id]) }}">
              <img class="image" src="{{ asset('./../storage/img/theaterPoster.png') }}">
              <div class="card-title">{{ $hall->title }}</div>
            </a>
          </div>
        @endforeach
      </div>
      <button class="back-button" type="button" onclick="location.href='{{ route('admin.index') }}'">戻る</button>
    </div>
  </section>
@endsection
