
@extends('layout')

@section('content')

<div style="margin-top :50px"></div>

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
@endsection