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
          <div class="form-element-wrapper-content">{{ $movie->title }}</div>
        </div>

        <div class="form-element-wrapper">
          <div class="form-element-wrapper-title"><label for="image_url">画像URL</label></div>
          <div class="form-element-wrapper-content">{{ $movie->image_url }}</div>
        </div>

        <div class="form-element-wrapper">
          <div class="form-element-wrapper-title"><label for="published_date">公開日</label></div>
          <div class="form-element-wrapper-content">{{ $movie->formatted_published_date }}</div>
        </div>

        <div class="form-element-wrapper">
          <div class="form-element-wrapper-title"><label for="description">概要</label></div>
          <div class="form-element-wrapper-content">{{ $movie->description }}</div>
        </div>

        <button class="jump-button" type="button" onclick="location.href='{{ route('admin.date_schedules.index', ['movie_id' => $movie->id]) }}'">チケット購入画面へ</button>
        <button class="back-button" type="button" onclick="location.href='{{ route('admin.movies.index') }}'">戻る</button>
      </div>
    </section>
  </section>
@endsection
