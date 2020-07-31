@extends('layout')

@section('content')
    <h1>{{ $shop->name }}</h1>
    <div>
       <p>{{ $shop->address }}</p>
       <p>{{ $shop->reviews }}</p>
    </div>

    <iframe src="https://maps.google.co.jp/maps?output=embed&q={{ $shop->address }}"></iframe>
    
    <div>
        <a href={{ route('shop.list') }}>一覧に戻る</a>
        @auth
            @if ($shop->user_id === $login_user_id)
                 |  <a href={{ route('shop.edit', ['id' => $shop->id]) }}>編集</a>
                <p></p>
                <div style="margin-top :50px"></div>
                {{ Form::open(['method' => 'delete', 'route' => ['shop.destroy',$shop->id]]) }}
                    {{ Form::submit('削除',['class' => 'btn btn-outline-danger']) }}
                {{ Form::close() }}
            @endif
        @endauth    
    </div>
@endsection