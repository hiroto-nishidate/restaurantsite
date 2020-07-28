<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>レストラン</title>
        <style>body {padding:10px;}</style>
    </head>
    <body>
        <h1>お店一覧</h1>
        
        @foreach($shops as $shop)
        <p>
            {{ $shop->category->name }},
            {{ $shop->name }},
            {{ $shop->address }},
            {{ $shop->reviews }},
        </p>
    </body>
    
</html>