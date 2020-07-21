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
<div style="margin-top :50px"></div>
<body class="body">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <form method="POST" action="{{ route('contact.send') }}">
                @csrf
                <div class="row">                
                    <label class="col-md-12 text-left">お問い合わせ内容にお間違いがなければ送信ボタンを押して下さい。</label> 
                    <div style="margin-top :50px"></div>
                </div>    
                <div class="row">
                    <label class="col-md-3 text-left">メールアドレス</label>
                    <div class="inputs col-md-6 text-left">
                        {{ $inputs['email'] }}
                        <input
                        name="email"
                        value="{{ $inputs['email'] }}"
                        type="hidden">
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-3 col-form-label text-left">タイトル</label>
                    <div class="inputs col-md-6 text-left">
                        {{ $inputs['title'] }}
                        <input
                        name="title"
                        value="{{ $inputs['title'] }}"
                        type="hidden">
                    </div>
                </div>    
                <div class="row">    
                    <label class="col-md-3 col-form-label text-left">お問い合わせ内容</label>
                    <div class="inputs col-md-6 text-left">
                        {{ $inputs['body'] }}
                        <input
                        name="body"
                        value="{{ $inputs['body'] }}"
                        type="hidden">
                    </div>
                </div>
                <div class="submit col-md-12 mx-auto">
                    <div class="btn">
                        <button type="submit" class="btn btn-outline-success" name="action" value="back">入力内容修正</button>
                    </div>
                    <div class="btn">
                        <button type="submit" class="btn btn-success" name="action" value="submit">送信</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
    <footer class="fixed-bottom">  
　　　@include('layouts.hooder')
    </footer>
</html>