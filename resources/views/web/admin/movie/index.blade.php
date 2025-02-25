@push('styles')
  <link rel="stylesheet" href="{{ asset('./css/admin/movie/index.css') }}">
@endpush

@extends('layouts.layouts')
@section('content')
  <section class="content">
    <div class="wrapper">
      <h2 class="wrapper-title">映画一覧</h2>
      <div class="card-container">
        @foreach ($movies as $movie)
          <div class="card">
            <a href="{{ route('admin.movies.show', ['movie' => $movie->id]) }}">
              <img class="image" src="{{ asset('./../storage/img/' . $movie->image_url) }}">
              <div class="card-title">{{ $movie->title }}</div>
            </a>
          </div>
        @endforeach
      </div>
      <button class="back-button" type="button" onclick="location.href='{{ route('admin.index') }}'">戻る</button>
    </div>
  </section>
@endsection
