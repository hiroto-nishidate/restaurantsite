@extends('layout')

@section('content')
<link href="{{ secure_asset('css/sns.css') }}" rel="stylesheet">
<!-- フラッシュメッセージ 投稿が完了しました。 -->
@if (session('new_message'))
<div class="new_message">
    {{ session('new_message') }}
</div>
@endif

@if (session('edit_message'))
<div class="edit_message">
    {{ session('edit_message') }}
</div>
@endif


<link href="{{ secure_asset('css/show.css') }}" rel="stylesheet">

<div class="hoge">
    <h1>{{ $shop->name }}</h1>
  
    <div>
       <p>{{ $shop->address }}</p>
       <p>{{ $shop->reviews }}</p>
    </div>

    <iframe src="https://maps.google.co.jp/maps?output=embed&q={{ $shop->address }}"></iframe>
    
                <section id="sns">
            <div class="wrapper">
                <div class="sns-box">
                    <h3 class="sub-title">Facebook</h3>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fwebcreatorbox.fb%2F&tabs=timeline&width=340&height=315&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=229812980409867" width="340" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>

                <div class="sns-box">
                    <h3 class="sub-title">Twitter</h3>
                    <a class="twitter-timeline" data-height="315" href="https://twitter.com/webcreatorbox?ref_src=twsrc%5Etfw">Tweets by webcreatorbox</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>

                <div class="sns-box">
                    <h3 class="sub-title">Youtube</h3>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/bqJtUojA1-g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div><!-- /.wrapper -->
        </section><!-- /#sns -->
    
     
    <div>
        <a href={{ route('shop.list') }}>一覧に戻る</a>
        @auth
            @if ($shop->user_id === $login_user_id)
                 |  <a href={{ route('shop.edit', ['id' => $shop->id]) }}>編集</a>
                <p></p>
</div>                 
                <div style="margin-top :50px"></div>
                {{ Form::open(['method' => 'delete', 'route' => ['shop.destroy',$shop->id]]) }}
                    {{ Form::submit('削除',['class' => 'btn btn-outline-danger']) }}
                {{ Form::close() }}
            @endif
        @endauth    
    </div>

<div style="margin-top :100px"></div>    
@endsection