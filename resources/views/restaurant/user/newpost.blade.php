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
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>My プロフィール</h2>
                <form action="{{ action('Admin\NewpostController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">店名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="store_name" value="{{ old('store_name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">駅名</label>
                        <div class="col-md-10">
                            <input type="radio" id="shinjuku" name="station" value="新宿" {{ old("station") == "新宿" ? "checked" :""}}>
                            <label for="man">新宿</label>
                            <input type="radio" id="ikebukuro" name="station" value="池袋" {{ old("station") == "池袋" ? "checked" :""}}>
                            <label for="woman">池袋</label>
                            <input type="radio" id="musashikosugi" name="station" value="武蔵小杉" {{ old("station") == "武蔵小杉" ? "checked" :""}}>
                            <label for="other">武蔵小杉</label>
                            <input type="radio" id="roppongi" name="station" value="六本木" {{ old("station") == "六本木" ? "checked" :""}}>
                            <label for="other">六本木</label>                           
                            <input type="radio" id="ebisu" name="station" value="恵比寿" {{ old("station") == "恵比寿" ? "checked" :""}}>
                            <label for="other">恵比寿</label>                              
                            <input type="radio" id="sinagawa" name="station" value="品川" {{ old("station") == "品川" ? "checked" :""}}>
                            <label for="other">品川</label>                            
                            <input type="radio" id="nakameguro" name="station" value="中目黒" {{ old("station") == "中目黒" ? "checked" :""}}>
                            <label for="other">中目黒</label>   
                            <input type="radio" id="other" name="station" value="その他" {{ old("station") == "その他" ? "checked" :""}}>
                            <label for="other">その他</label>                               
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">趣味</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">自己紹介欄</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="20">{{ old('introduction') }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
  </body>    
    <footer class="fixed-bottom">  
　　　@include('layouts.hooder')
    </footer>
</html>