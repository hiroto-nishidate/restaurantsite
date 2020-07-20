<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="{{ secure_asset('css/main.css') }}" rel="stylesheet">

  </head>
@include('layouts.navbar')

  <body>
    
　　 <img src="{{ secure_asset('image/top_image.jpg')}}" alt="background" class="img_center">
　　  
　　  <div class="text-center">
      <button type="button" class="btn btn-outline-primary">新宿</button>      
      <button type="button" class="btn btn-outline-primary">池袋</button>
      <button type="button" class="btn btn-outline-primary">武蔵小杉</button>
      <button type="button" class="btn btn-outline-primary">六本木</button>
      <button type="button" class="btn btn-outline-primary">恵比寿</button>
      <button type="button" class="btn btn-outline-primary">品川</button>
      <button type="button" class="btn btn-outline-primary">中目黒</button>
      <button type="button" class="btn btn-outline-primary">その他</button>
      </div>
　　  <div class="text-center">
      <button type="button" class="btn btn-outline-primary">検索</button>  
      </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <footer class="fixed-bottom">  
　　　@include('layouts.hooder')
    </footer>      
  </body>
</html>