  @push('styles')
    <link rel="stylesheet" href="{{ asset('./css/admin/movie/create.css') }}">
  @endpush

  @extends('layouts.layouts')
  @section('content')
    <section class="content">
      <section class="my-wrapper">
        <div class="wrapper">
          <h2 class="wrapper-title"">映画情報登録</h2>
          <form action="{{ route('admin.movies.store') }}" method="POST">
            @csrf
            <div class="form-element-wrapper">
              <div class="form-element-wrapper-title"><label for="title">映画タイトル</label></div>
              <div class="form-element-wrapper-content"><input type="text" id="title" name="title" required></div>
            </div>

            <div class="form-element-wrapper">
              <div class="form-element-wrapper-title"><label for="image_url">画像URL</label></div>
              <div class="form-element-wrapper-content"><input type="url" id="image_url" name="image_url" required></div>
            </div>

            <div class="form-element-wrapper">
              <div class="form-element-wrapper-title"><label for="published_date">公開年</label></div>
              <div class="form-element-wrapper-content"><input type="number" id="published_date" name="published_date" required></div>
            </div>

            <div class="form-element-wrapper">
              <div class="form-element-wrapper-title"><label for="is_showing">上映中ですか？</label></div>
              <div><input type="hidden" id="is_showing" name="is_showing" value="0"></div>
              <div class="form-element-wrapper-content-checkbox"><input type="checkbox" id="is_showing" name="is_showing" value="1"></div>
            </div>

            <div class="form-element-wrapper">
              <div class="form-element-wrapper-title"><label for="description">概要</label></div>
              <div class="form-element-wrapper-content">
                <textarea class="form-element-wrapper-content-textarea" id="description" name="description" required></textarea>
              </div>
            </div>

            <button class="jump-button" type="submit">送信</button>
            <button class="back-button" type="button" onclick="location.href='{{ route('admin.movies.index') }}'">戻る</button>
          </form>
        </div>
      </section>
    </section>
  @endsection
