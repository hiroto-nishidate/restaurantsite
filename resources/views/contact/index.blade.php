
@extends('layout')

@section('content')
<div style="margin-top :50px"></div>

        

    <div class="container">
        <div class="row text-center">
        <div class="col-md-12">
            <form method="POST" action="{{ route('contact.confirm') }}">
            @csrf
                <div class="form-group row">
                    <label for="email"class="col-md-3 col-form-label text-md-right">メールアドレス</label>
                    <div class="col-md-6">
                        <input id="email"
                            class="form-control"
                            name="email"
                            value="{{ old('email') }}"
                            type="email">
                        @if ($errors->has('email'))
                            <p class="error-message">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="title"class="col-md-3 col-form-label text-md-right">タイトル</label>
                    <div class="col-md-6">
                        <input id="title"
                            class="form-control"
                            name="title"
                            value="{{ old('title') }}"
                            type="text">
                        @if ($errors->has('title'))
                            <p class="error-message">{{ $errors->first('title') }}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="body"class="col-md-3 col-form-label text-md-right">お問い合わせ内容</label>
                    <div class="col-md-6">
                        <textarea class="form-control" name="body" rows="10">{{ old('body') }}</textarea>
                        @if ($errors->has('body'))
                            <p class="error-message">{{ $errors->first('body') }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-12 mx-auto">
                    <input type="submit" class="btn btn-success" value="入力内容確認">
                </div>
            </form>
        </div>
        </div>
    </div>
<div style="margin-top :100px"></div>       
@endsection
