@extends('layout')

@section('content')
    
    <div class="text-center pt-10">ユーザーオプション。</div>

    <div class="position-absolute h-50 w-0 m-0 d-flex align-items-center">
        <div>
    <a href="{{ url('/restaurant/user/profiles/create') }}" class="btn btn-outline-primary btn-lg btn-block" role="button">投稿画面一覧</a>
    <a href="{{ url('/user/index') }}" class="btn btn-outline-primary btn-lg btn-block" role="button">ユーザー情報変更</a>
    <a href="{{ url('restaurant/user/delete_confirm') }}" class="btn btn-outline-danger btn-lg btn-block" role="button">アカウント削除</a>
        </div>
    </div>
@endsection