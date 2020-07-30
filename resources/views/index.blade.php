@extends('layout')

@section('content')
    <h1>お店一覧</h1>
    
    <table class='table table-striped table-hover'>
        <tr>
            <th>店名</th> <th>住所</th> <th>口コミ</th>
        </tr>
        @foreach($shops as $shop)
            <tr>
                <td>
                    <a href= {{ route('shop.detail', ['id' => $shop->id]) }} >
                       {{ $shop->name }}
                    </a>
           　　  </td>
                <td>{{ $shop->address }}</td>
                <td>{{ $shop->reviews }}</td>
             </tr>
        @endforeach      
    </table>
    @auth
    <div>
        <a href= {{ route('shop.new') }} class='btn btn-outline-primary'>新しいお店　</a>
    </div>
    @endauth

@endsection