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
                        <div class="form-element-wrapper-content">{{ $movie->title }}</div>
                    </div>

                    <div class="form-element-wrapper">
                        <div class="form-element-wrapper-title"><label for="image_url">画像URL</label></div>
                        <div class="form-element-wrapper-content">{{ $movie->image_url }}</div>
                    </div>

                    <div class="form-element-wrapper">
                        <div class="form-element-wrapper-title"><label for="published_date">公開日</label></div>
                        <div class="form-element-wrapper-content">{{ $movie->published_date }}</div>
                    </div>

                    <div class="form-element-wrapper">
                        <div class="form-element-wrapper-title"><label for="description">概要</label></div>
                        <div class="form-element-wrapper-content">{{ $movie->description }}</div>
                    </div>

                    <button class="jump-button" type="button"
                        onclick="location.href='{{ route('admin.date_schedules.index', ['id' => $movie->id]) }}'">チケットを買う</button>
                    <button class="back-button" type="button"
                        onclick="location.href='{{ route('admin.movies.index') }}'">戻る</button>

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
