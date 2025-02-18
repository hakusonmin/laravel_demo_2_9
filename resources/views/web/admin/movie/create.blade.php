<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie</title>
    <link rel="stylesheet" href="{{ asset('./css/admin/movie/create.css') }}">
</head>
<body>

    <section class="my-wrapper">

      <div class="wrapper">
      <h2 class="mimi">映画情報登録</h2>
        <form action="{{ route('admin.movies.store') }}" method="POST">
          @csrf
            <div class="form-element-wrapper">
              <div class="form-element-wrapper-title"><label for="title">映画タイトル</label></div>
              <div ><input class="form-element-wrapper-content" type="text" id="title" name="title" required></div>
            </div>
            
            <div class="form-element-wrapper">
              <div class="form-element-wrapper-title"><label for="image_url">画像URL</label></div>
              <div ><input class="form-element-wrapper-content" type="url" id="image_url" name="image_url" required></div>
            </div>
      
            <div class="form-element-wrapper">
              <div class="form-element-wrapper-title"><label for="published_date">公開年</label></div>
              <div ><input class="form-element-wrapper-content" type="number" id="published_date" name="published_date" required></div>
            </div>

            <div class="form-element-wrapper">
              <div class="form-element-wrapper-title"><label for="is_showing">上映中ですか？</label></div>
              <div><input class="form-element-wrapper-content" type="hidden" id="is_showing" name="is_showing" value="0"></div>
              <div><input class="form-element-wrapper-content" type="checkbox" id="is_showing" name="is_showing" value="1"></div>
            </div>
      
            <div class="form-element-wrapper">
              <div class="form-element-wrapper-title"><label for="description">概要</label></div>
              <div ><textarea class="form-element-wrapper-content-textarea" id="description" name="description" required></textarea></div>
            </div>
              
            <button type="submit">送信</button>
        </form>

        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li class="error-aleart">「{{ $error }}」</li>
                  @endforeach
              </ul>
          </div>
        @endif
      </div>
    </section>
</body>
