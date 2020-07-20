
<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  </head>

@include('layouts.navbar')

<body>
<div style="margin-top :50px"></div>

        
<body class="body">
    <div class="container">
        <div class="row text-center">
        <div class="col-md-12">
            <form method="POST" action="{{ route('contact.confirm') }}">
            @csrf
                <div class="form-group row">
                    <label for="email"class="col-md-3 col-form-label text-md-right">メールアドレス</label>
                    <div class="col-md-6">
                        <input id="email"
                            class="form-control"
                            name="email"
                            value="{{ old('email') }}"
                            type="email">
                        @if ($errors->has('email'))
                            <p class="error-message">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="title"class="col-md-3 col-form-label text-md-right">タイトル</label>
                    <div class="col-md-6">
                        <input id="title"
                            class="form-control"
                            name="title"
                            value="{{ old('title') }}"
                            type="text">
                        @if ($errors->has('title'))
                            <p class="error-message">{{ $errors->first('title') }}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="body"class="col-md-3 col-form-label text-md-right">お問い合わせ内容</label>
                    <div class="col-md-6">
                        <textarea class="form-control" name="body" rows="10">{{ old('body') }}</textarea>
                        @if ($errors->has('body'))
                            <p class="error-message">{{ $errors->first('body') }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-12 mx-auto">
                    <input type="submit" class="btn btn-success" value="入力内容確認">
                </div>
            </form>
        </div>
        </div>
    </div>
<div style="margin-top :100px"></div>    
</body>
    <footer class="fixed-bottom">  
　　　@include('layouts.hooder')
    </footer>
</html>
