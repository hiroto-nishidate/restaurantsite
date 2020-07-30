@extends('layout')

@section('content')
    <h1>{{ $shop->name }}</h1>
    <div>
       <p>{{ $shop->address }}</p>
       <p>{{ $shop->reviews }}</p>     
    </div>
    <iframe id='map' src='https://www.google.com/maps/embed/v1/place?key=AIzaSyBK2zKbG_mkp7_K0W8qzNi-iqdRI0e7J4w;q={{ $shop->address }}'
    <i frame id='map'
     src='https://www.google.com/maps/embed/v1place?key=AIzaSyCghBscyGeA5zG4Q29LDAgIyCAwjamM9wM={{ $shop->address }}''
     width='100%'
     height='320'
     frameborder='0'>
    </iframe>  

    
    <div>
        <a href={{ route('shop.list') }}>一覧に戻る</a>
        |  <a href={{ route('shop.edit', ['id' => $shop->id]) }}>編集</a>
        <p></p>
        {{ Form::open(['method' => 'delete', 'route' => ['shop.destroy',$shop->id]]) }}
            {{ Form::submit('削除',['class' => 'btn btn-outline-danger']) }}
        {{ Form::close() }}
    </div>
@endsection