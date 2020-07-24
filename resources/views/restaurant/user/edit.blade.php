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
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">

                <form action="{{ action('Admin\NewpostController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">店名(必須)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="store_name" value="{{ $newpost_form->store_name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">駅名(必須)</label>
                        <div class="col-md-10">
                            <input type="radio" id="shinjuku" name="station" value="新宿" {{ $newpost_form->station == "新宿" ? "checked" :""}}>
                            <label for="shinjuku">新宿</label>
                            <input type="radio" id="ikebukuro" name="station" value="池袋" {{ $newpost_form->station == "池袋" ? "checked" :""}}>
                            <label for="ikebukuro">池袋</label>
                            <input type="radio" id="musashikosugi" name="station" value="武蔵小杉" {{ $newpost_form->station  == "武蔵小杉" ? "checked" :""}}>
                            <label for="musashikosugi">武蔵小杉</label>
                            <input type="radio" id="roppongi" name="station" value="六本木" {{ $newpost_form->station == "六本木" ? "checked" :""}}>
                            <label for="roppongi">六本木</label>                           
                            <input type="radio" id="ebisu" name="station" value="恵比寿" {{$newpost_form->station  == "恵比寿" ? "checked" :""}}>
                            <label for="ebisu">恵比寿</label>                              
                            <input type="radio" id="sinagawa" name="station" value="品川" {{ $newpost_form->station == "品川" ? "checked" :""}}>
                            <label for="sinagawa">品川</label>                            
                            <input type="radio" id="nakameguro" name="station" value="中目黒" {{ $newpost_form->station == "中目黒" ? "checked" :""}}>
                            <label for="nakameguro">中目黒</label>   
                            <input type="radio" id="other" name="station" value="その他" {{ $newpost_form->station  == "その他" ? "checked" :""}}>
                            <label for="other">その他</label>      
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2"for="image">画像(必須)</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                            <div class="form-text text-info">
                                設定中:{{$newpost_form->image_path}}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">電話</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="phone" value="{{ $newpost_form->phone}}">
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label class="col-md-2">住所</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="address" value="{{ $newpost_form->address }}">
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label class="col-md-2">定休日</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="holiday" value="{{ $newpost_form->holiday }}">
                        </div>
                    </div>     
                    <div class="form-group row">
                        <label class="col-md-2">URL</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="url" value="{{ $newpost_form->url }}">
                        </div>
                    </div>                     
                    <div class="form-group row">
                        <label class="col-md-2">料金単価</label>
                        <div class="col-md-10">
                            <input type="radio" id="500en" name="price" value="500円" {{ $newpost_form->price == "500円" ? "checked" :""}}>
                            <label for="man">500円</label>
                            <input type="radio" id="1000en" name="price" value="1000円" {{ $newpost_form->price == "1000円" ? "checked" :""}}>
                            <label for="woman">1000円</label>
                            <input type="radio" id="1500en" name="price" value="1500円以上" {{ $newpost_form->price == "1500円以上" ? "checked" :""}}>
                            <label for="other">1500円以上</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">営業時間</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="hours" value="{{ $newpost_form->hours }}">
                        </div>
                    </div>     
                    <div class="form-group row">
                        <label class="col-md-2">評価</label>
                        <div class="col-md-10">
                            <input type="radio" id="hoshi1" name="evaluation" value="☆" {{ $newpost_form->evauation == "☆" ? "checked" :""}}>
                            <label for="hoshi1">☆</label>
                            <input type="radio" id="hoshi2" name="evaluation" value="☆☆" {{ $newpost_form->evauation == "☆☆" ? "checked" :""}}>
                            <label for="hoshi2">☆☆</label>
                            <input type="radio" id="hoshi3" name="evaluation" value="☆☆☆" {{ $newpost_form->evauation == "☆☆☆" ? "checked" :""}}>
                            <label for="hoshi3">☆☆☆</label>
                            <input type="radio" id="hoshi4" name="evaluation" value="☆☆☆☆" {{ $newpost_form->evauation == "☆☆☆☆" ? "checked" :""}}>
                            <label for="hoshi4">☆☆☆☆</label>
                            <input type="radio" id="hoshi5" name="evaluation" value="☆☆☆☆☆" {{ $newpost_form->evauation == "☆☆☆☆☆" ? "checked" :""}}>
                            <label for="hoshi5">☆☆☆☆☆</label>   
                        </div>
                    </div> 
                     <div class="form-group row">
                        <label class="col-md-2">口コミ</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="reviews" rows="10">{{ $newpost_form->reviews }}</textarea>
                        </div>
                    </div>              
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $newpost_form->id }}">
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
  </body>    
</html>