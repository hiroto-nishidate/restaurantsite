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
            <h2>投稿データ</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\NewpostController@create') }}" role="button" class="btn btn-primary">新規投稿</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\NewpostController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label> 
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-newpost mx-auto">　
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">店名</th>
                                <th width="20%">駅名</th>
                                <th width="20%">電話</th>
                                <th width="20%">住所</th>
                                <th width="20%">定休日</th>
                                <th width="20%">URL</th>
                                <th width="20%">料金単価</th>
                                <th width="20%">営業時間</th>
                                <th width="20%">評価</th>
                                <th width="20%">口コミ</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $newpost)
                                <tr>
                                    <th>{{ $newpost->id }}</th>
                                    <td>{{ $newpost->store_name }}</td>
                                    <td>{{ $newpost->station }}</td>
                                    <th>{{ $newpost->phone }}</th>
                                    <td>{{ $newpost->address }}</td>
                                    <td>{{ $newpost->holiday }}</td>                                    
                                    <th>{{ $newpost->url }}</th>
                                    <td>{{ $newpost->price }}</td>
                                    <td>{{ $newpost->hours }}</td>
                                    <td>{{ $newpost->evaluation }}</td>
                                    <td>{{ $newpost->reviews }}</td>       
                                    <td>
                                    <div>
                                    <a href="{{ action('Admin\NewpostController@edit', ['id' => $newpost->id]) }}">編集</a>    
                　　                  </div>
                　　                  <div>
                                    <a href="{{ action('Admin\NewpostController@delete', ['id' => $newpost->id]) }}">削除</a>
                                    </div>    
                                    </td>                                    
                               </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>    
<div style="margin-top :100px"></div>
<footer class="fixed-bottom">  
@include('layouts.hooder')
</footer>
</html>